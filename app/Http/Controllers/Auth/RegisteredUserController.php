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
            // IF there is no permission
            if (Permission::count() <=0) {
                // Permission list in array
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
                // Creating permissions
                foreach ($permissions as $permission) {
                    Permission::create(['name' => $permission]);
                }
            }


            $adminrole = Role::create(['name' => 'admin']);
            $role = Role::where('name','admin')->first();
            $permissions = Permission::pluck('id','id')->all();
            $role->syncPermissions($permissions);

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

        if (User::count() == 1) {
            $role = Role::where('name','admin')->first();
            $user->assignRole([$role->id]);
        }


        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
