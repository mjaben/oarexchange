<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rate;
use DB;
use App\Models\User;
use App\Models\Linked;
use App\Models\History;
use Mail;

class dcontroller extends Controller
{
        public function dashboard()
        {
            if(Auth::user()->hasRole(['admin',['assistant']])){
                $historyies = History::orderBy('created_at','desc')->get();
                return view('adminpages.admindash')->with('historyies', $historyies);
            }elseif(Auth::user()->hasRole('customer')){
                $cat_arr = array();
                $user_id = auth()->user()->id;
                $historyies = History::where('user_id',$user_id)->get()->take(4);
                $rates = Rate::orderBy('created_at','asc')->get();
                $pussy = array_reverse(json_decode($historyies), true);
                foreach($pussy as $cat){
                    array_push($cat_arr, $cat);
                }
                return view('userpages.dash')->with('rates', $rates)
                                             ->with('cat_arr', $cat_arr);
            }
        }

        public function addbk(){
            $auth = auth()->user()->id;
            $adminds = Linked::where('userid',$auth)->get();
            //dd($adminds);
            return view('userpages.addbk')->with('adminds', $adminds);

        }

        public function acceptPayment($id){
            History::find($id)->update(['status'=> 1]);
            notify()->success("Payment Confirmed!","");
            return back();
        }

        public function assignAdmin($id){
            $user = User::find($id);
            $user->detachRole('customer');
            $user->attachRole('assistant');
            notify()->success("Access Granted!","");
            return back();
        }

        public function revokeAdmin($id){
            $user = User::find($id);
            $user->detachRole('assistant');
            $user->attachRole('customer');
            notify()->success("Access Revoked!","");
            return back();
        }

        public function adminVerifyUser($id){
            User::find($id)->update(['verify_user'=> 1]);
            notify()->success("User Verified!","");
            return back();
        }

        public function verifyUser(Request $request){
            $token = User::where('code', $request->code)->update(['verify_user'=> 1]);
            if($token){
                \Mail::send('emails.ewelcome', array(), function($message) use ($request)
            {
                $user_mail = User::where('code', $request->code)->first();
                $recepient = $user_mail['email'];
                $message->from('info@oarexchange.com', "OAR Exchange");
                $message->to($recepient);
                $message->subject("Welcome to OAR Exchange");
            });
        }
            return redirect()->route('login')->with('success','Your account has been verified, you can now login.');
    }

        public function transaction(){
            $cat_arr = array();
            $user_id = auth()->user()->id;
            $historyies = History::where('user_id',$user_id)->get();
            $pussy = array_reverse(json_decode($historyies), true);
            foreach($pussy as $cat){
                array_push($cat_arr, $cat);
            }
            return view('userpages.transaction')->with('cat_arr', $cat_arr);
        }

        public function adminsettings(){
            $auth = auth()->user()->id;
            $linked = Linked::where('userid',$auth)->first();
            return view('adminpages.linked-bank', compact('linked'));
        }

        public function allUsers(){
            $users = User::orderBy('created_at', 'DESC')->get();
            return view('userpages.users')->with('users', $users);
        }

        public function showUser($id){
            $history = History::find($id);
            if ($history) {
                return response()->json(['data' => $history], 200);
            } else {
                return response()->json(['error' => 'Record not found'], 404);
            }
        }

        public function createTransaction(){
            $user = Auth::User();
            if($user['address'] == null || $user['city'] == null || $user['country'] == null || $user['phone'] == null){
                notify()->warning("Please Update Your User Profile!","");
                return back();
            }
            $rates = Rate::orderBy('created_at','asc')->get();
            return view('userpages.create-transaction')->with('rates', $rates);
        }

        public function buyCoin(){
            $user = Auth::User();
            if($user['address'] == null || $user['city'] == null || $user['country'] == null || $user['phone'] == null){
                notify()->warning("Please Update Your User Profile!","");
                return back();
            }
            $rates = Rate::with('coinranges')->orderBy('created_at','asc')->get();
            return view('userpages.buyCoin')->with('rates', $rates);
        }

        public function sellCoin(){
            $user = Auth::User();
            if($user['address'] == null || $user['city'] == null || $user['country'] == null || $user['phone'] == null){
                notify()->warning("Please Update Your User Profile!","");
                return back();
            }
            $rates = Rate::orderBy('created_at','asc')->get();
            return view('userpages.sellCoin')->with('rates', $rates);
        }

        public function killUser($id)
        {
            User::find($id)->delete();
            notify()->success("User deleted!","Success");
            return back();
        }

        public function linked(){
            return view('userpages.linked');
        }

        public function settings(){
            return view('userpages.settings');
        }

        public function verification(){
            return view('userpages.verification');
        }

        public function admindash(){
            return view('adminpages.admindash');
        }

        public function rate(){

            $rates = Rate::all();
            return view('rate.create')->with('rates', $rates);
        }

        public function coinRates(){

            $rates = Rate::orderBy('created_at','desc')->get();
            //dd($rates);
            return view('rate.view')->with('rates', $rates);
        }

        public function privacyPolicy(){
            return view('adminpages.privacy_policy');
        }

        public function refundPolicy(){
            return view('adminpages.refund_policy');
        }

        public function editbtc(){
            return view('adminpages.editbtc');
        }

        public function addBankAccount(){
            return view('adminpages.add-bank-account');
        }

        public function adminconfirm(){
            return view('adminpages.adminconfirm');
        }

        public function admineditbk(){
            return view('adminpages.admineditbk');
        }

        public function buyinvoice(){
            return view('userpages.buyinvoice');
        }

        public function sellinvoice(){
            return view('userpages.sellinvoice');
        }

        public function verifyPage(){
            return view('auth.verify_code');
        }
}