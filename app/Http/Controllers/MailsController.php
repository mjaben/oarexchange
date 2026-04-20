<?php

namespace App\Http\Controllers;

use Mail;
use App\Models\Sale;
use App\Models\User;
use App\Models\Linked;
use App\Models\History;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MailsController extends Controller
{
    public function buyMail(Request $request)
    {
        try {
            return DB::transaction(function () use ($request) {
                $purchase  = Purchase::where('orderId', $request->orderId)->firstOrFail();
                $user      = User::findOrFail($purchase->user_id);
                $register  = Linked::where('userid', $purchase->user_id)->firstOrFail();

                $data = [
                    'orderId'    => $purchase->orderId,
                    'type'       => $purchase->type,
                    'total'      => $purchase->total,
                    'value'      => $purchase->value,
                    'coin'       => $purchase->rate,
                    'status'     => $purchase->status,
                    'user_id'    => $purchase->user_id,
                    'bankname'   => $register->bankname,
                    'network'    => $request->network,
                    'acctnumber' => $request->acctnumber,
                    'firstname'  => auth()->user()->name,
                    'lastname'   => auth()->user()->last_name
                ];

                $history = new History($data);

                // === Send Admin Email ===
                $adminMailSent = \Mail::send('emails.adminBuyMail', [
                    'orderId'     => $purchase->orderId,
                    'total'       => $purchase->total,
                    'value'       => $purchase->value,
                    'coin_address'=> $request->get('coin_address'),
                    'sender_name' => $request->get('sender_name'),
                    'rate'        => $request->get('rate')
                ], function ($message) {
                    $message->from('info@oarexchange.com', "OAR Exchange");
                    $message->to('info@oarexchange.com');
                    $message->subject('A New Buy Order Received');
                });

                if ($adminMailSent === false) {
                    throw new \Exception("Admin email failed to send");
                }

                // === Send User Email ===
                $userMailSent = \Mail::send('emails.buyorder', [
                    'orderId'    => $purchase->orderId,
                    'total'      => $purchase->total,
                    'value'      => $purchase->value,
                    'btcaddress' => $request->get('coin_address'),
                    'bankname'   => $register->bankname,
                    'acctnumber' => $register->acctnumber,
                    'firstname'  => $user->name,
                    'lastname'   => $user->last_name,
                    'rate'       => $request->get('rate'),
                ], function ($message) use ($user) {
                    $message->from('info@oarexchange.com', "OAR Exchange");
                    $message->to($user->email);
                    $message->subject("We've Received Your Buy Order");
                });

                if ($userMailSent === false) {
                    throw new \Exception("User email failed to send");
                }

                // Only save if both emails succeed
                $history->save();

                return redirect()->route('dashboard')
                    ->with('success', 'Check your email for your order details');
            });
        } catch (\Throwable $e) {
            // Rollback occurs automatically
            notify()->error("Transaction failed!");
            return back()->with('error', 'Failed to process buy order: ' . $e->getMessage());
        }
    }



    public function sellMail(Request $request)
    {
        try {
            return DB::transaction(function () use ($request) {
                $sale     = Sale::where('orderId', $request->orderId)->firstOrFail();
                $register = Linked::where('userid', $sale->user_id)->firstOrFail();

                $data = [
                    'orderId'    => $sale->orderId,
                    'type'       => $sale->type,
                    'total'      => $sale->total,
                    'value'      => $sale->value,
                    'coin'       => $sale->rate,
                    'status'     => $sale->status,
                    'user_id'    => $sale->user_id,
                    'bankname'   => $register->bankname,
                    'acctnumber' => $register->acctnumber,
                    'network'    => $request->network ?? 'No network for coin',
                    'firstname'  => auth()->user()->name,
                    'lastname'   => auth()->user()->last_name
                ];

                // Create history only after emails succeed
                // so we delay persisting until after mail sending
                $history = new History($data);

                // === Send Admin Email ===
                $adminMailSent = \Mail::send('emails.adminSellMail', [
                    'orderId'     => $sale->orderId,
                    'value'       => $sale->value,
                    'acctname'    => $register->firstname . " " . $register->lastname,
                    'bankname'    => $register->bankname,
                    'acctnumber'  => $register->acctnumber,
                    'sender_name' => $request->get('sender_name')
                ], function ($message) {
                    $message->from('info@oarexchange.com', "OAR Exchange");
                    $message->to('info@oarexchange.com');
                    $message->subject('A New Sell Order Received');
                });

                if ($adminMailSent === false) {
                    throw new \Exception("Admin email failed to send");
                }

                // === Send User Email ===
                $user = User::findOrFail($sale->user_id);

                $userMailSent = \Mail::send('emails.sellorder', [
                    'linkId'  => $request->get('linkId'),
                    'orderId' => $sale->orderId,
                    'value'   => $sale->value,
                    'total'   => $sale->total,
                ], function ($message) use ($user) {
                    $message->from('info@oarexchange.com', "OAR Exchange");
                    $message->to($user->email);
                    $message->subject("We've Received Your Sell Order");
                });

                if ($userMailSent === false) {
                    throw new \Exception("User email failed to send");
                }

                // Only save history if all mails succeed
                $history->save();

                return redirect()->route('dashboard')
                    ->with('success', 'Check your email for order confirmation');
            });
        } catch (\Throwable $e) {
            // Rollback will happen automatically
            notify()->error("Transaction failed!");
            return back()->with('error', 'Failed to process sell order: ' . $e->getMessage());
        }
    }



}