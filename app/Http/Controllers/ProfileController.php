<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Course;
use App\Models\User;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index(Request $request): View
    {
        return view('profile.index', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Display the user's profile dashboard.
     */
    public function dashboard(Request $request): View
    {
        return view('profile.dashboard', [
            'user' => $request->user(),
        ]);
    }


    /**
     * Display the user's enrolled courses.
     */
    // : View
    public function ecources(Request $request): View
    {
        // $user = User::find($request->user()->id)->with('mycourses');
        // return view('profile.ecources', compact('user'));
        return view('profile.ecources', [
            'user' => $request->user(),
        ]);
    }



    /**
     * Display the user's enrolled courses.
     */
    public function mycource(Request $request): View
    {
        $mypucourses = Course::where('instructor_id',$request->user()->id)->where('status','3')->get();
        $mypecourses = Course::where('instructor_id',$request->user()->id)->where('status','1')->get();
        return view('profile.mycource', [
            'user' => $request->user(),
            'mypucourses' => $mypucourses,
            'mypecourses' => $mypecourses,
        ]);
    }



    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    // : RedirectResponse
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {

        // return $request;
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }


    /**
     * Update the user's profile information.
     */
    // : RedirectResponse
    public function ppupdate(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        if ($request->file('pp')) {
            // Delete old profilepicture
            if($user->pp) {
                unlink($user->pp);
            }
            $image = $request->file('pp');
            $image_full_name = time().'_'.$user->name.$user->id.'.'.$image->extension();
            $upload_path = 'images/pp/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            $user->pp = $image_url;
        }

        $user->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
