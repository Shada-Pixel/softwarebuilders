<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\View\View;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Spatie\Permission\Models\Permission;



class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // : RedirectResponse
    public function store(Request $request)
    {
        // Validating request
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        // User created
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Assigning student id
        if (User::count() == 1) {
            $role = Role::where('name','admin')->first();
            $user->assignRole([$role->id]);
        } else {
            $role = Role::where('name','student')->first();
            $user->assignRole([$role->id]);
        }

        event(new Registered($user));
        Auth::login($user);


        $msg = 'Welcome to Software Builders Ltd. Your acount has been created.';
        $link= route('home');
        $maildata = ['name' => $user->name, 'text' => $msg , 'link' => $link ];
        $sendmail = Mail::to($user->email)->send(new WelcomeMail($maildata));

        // Trying to send Welcome
        try {
        } catch (\Throwable $th) {
            //throw $th;
        }





        return redirect(RouteServiceProvider::HOME);
    }
}
