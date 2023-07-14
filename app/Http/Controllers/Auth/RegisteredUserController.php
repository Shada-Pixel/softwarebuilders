<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Role;
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


        // If there is no user exist
        if (User::count() <= 0) {
            $permissions = [
                'user-list',
                'user-create',
                'user-edit',
                'user-delete',
                'permission-list',
                'permission-create',
                'permission-edit',
                'permission-delete',
                'role-list',
                'role-create',
                'role-edit',
                'role-delete'
            ];

            foreach ($permissions as $permission) {
                Permission::create(['name' => $permission]);
            }

            $role = Role::create(['name' => 'admin']);
            $role->syncPermissions($request->input('permission'));

            $role = Role::where('name','admin')->first();
            $permissions = Permission::pluck('id','id')->all();
            $role->syncPermissions($permissions);
            $admin->assignRole([$role->id]);
        }

        return $permissions;

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}