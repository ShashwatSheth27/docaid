<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
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
        return view('auth.register');
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
        $request->validate([
            'firstname' => ['required', 'string','min:2', 'max:20'],
            'lastname' => ['required', 'string','min:2', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone_no' => ['required','digits:10','min:10','max:10'],
            'country' => ['required','string'],
            'gender' => ['required','string'],
            'dob' => ['required','date','before_or_equal:yesterday'],
            'address' => ['required','alpha_dash','max:150'],
        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_no' => $request->phone_no,
            'country' => $request->country,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'age' => (int)date("Y") - (int)date('Y',strtotime($request->dob)),
            'address' => $request->address,
        ]);

        event(new Registered($user));
        
        if($request->ajax()){
            return true;
        }else{
            Auth::login($user);
            return redirect(RouteServiceProvider::HOME);
        }
    }
}
