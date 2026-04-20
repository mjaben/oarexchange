<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Referral;
use App\Models\Verify;
use App\Providers\RouteServiceProvider;
use App\Rules\TurnstileRule;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Prevent caching of the registration page to ensure fresh CSRF token
        return response()
            ->view('auth.register')
            ->header('Cache-Control', 'no-cache, no-store, must-revalidate')
            ->header('Pragma', 'no-cache')
            ->header('Expires', '0');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'cf-turnstile-response' => ['required', new TurnstileRule],
            'name'           => ['required', 'string', 'max:191'],
            'last_name'      => ['required', 'string', 'max:191'],
            'email'          => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username'       => ['required', 'string', 'max:11', 'unique:users'],
            'referral_code'  => ['nullable', 'string', 'max:11'],
            'password'       => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $random = random_int(100000, 999999);
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $referral_logic = substr(str_shuffle($str_result),0, 8);
        $referral_link = $referral_logic;
        $referred_user = $request->referral_link;

        $user = User::create([
            'name'             => $request->name,
            'last_name'        => $request->last_name,
            'email'            => $request->email,
            'verify_user'      => 0,
            'code'             => $random,
            'username'         => $request->username,
            'ref_code'         => $request->ref_code,
            'referral_code'    => $referral_link,
            'password'         => Hash::make($request->password)
        ]);

        $user->attachRole('2');

            if (isset($request['ref_code'])) {
                $referrer = User::where('referral_code', $request['ref_code'])->first();
                if ($referrer) {
                    Referral::create([
                        'user_id'       => $referrer->id,
                        'referral_id'   => $user->id
                    ]);
                }
            }

            Verify::create([
                'user_id'   => $user->id,
                'token'     => $user->code
            ]);
    
            $zuggs = $user->code;
    
            \Mail::send('emails.econfirmcode', array(
    
                'confirm_code' => $user['code'],
    
            ), function($message) use ($request)
            {
                $email = $request->email;
                $message->from('info@oarexchange.com', "OAR Exchange!");
                $message->to($email);
                $message->subject('Activate your account!');    
            });
    
            return view('auth.verify_code',['zuggs'=> $zuggs]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->except(['_method','_token']);

        $user = User::find($id);
        //dd($user);
        $user->update($data);

        notify()->success("User profile updated!","Success");

        return redirect()->back();

    }
}
