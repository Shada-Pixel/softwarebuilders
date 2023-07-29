<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Cart;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of( Course::query())->addIndexColumn()->make(true);
        }

        return view('dashboard.courses.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $instructors = User::role('instructor')->get() ;
        $categories = Category::all();
        return view('dashboard.courses.create',compact('instructors','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {

        
        // return $request;
        $course = new Course;
        $course->name = $request->name;
        $course->slug = $request->slug;
        $course->category_id = $request->category_id;
        $course->user_id = Auth::id();
        $course->instructor_id = $request->category_id;

        // course cover
        if ($request->file('cover')) {
            $thumbnail = $request->file('cover');
            $image_full_name = time().'_'.str_replace([" ", "."], ["_","a"],$course->name).$course->id.'.'.$thumbnail->getClientOriginalExtension();
            $upload_path = 'images/frontimages/courses/';
            $image_url = $upload_path.$image_full_name;
            $success = $thumbnail->move($upload_path, $image_full_name);
            $course->cover = $image_url;
        }
        $course->regular_price = $request->regular_price;
        $course->current_price = $request->current_price;
        $course->status = '1';
        $course->short_description = $request->short_description;
        $course->description = $request->description;
        $course->materials = $request->materials;
        $course->curriculam = $request->curriculam;

	    $course->save();

        return redirect()->route('courses.index')->withSuccess(__('Course created successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        // return $course;
        $mycartcourse = count(Cart::where('course_id',$course->id)->where('user_id', Auth::user()->id)->get());
        return view('dashboard.courses.show',compact('course','mycartcourse'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $instructors = User::role('instructor')->get() ;
        $categories = Category::all();
        return view('dashboard.courses.edit',compact('instructors','categories','course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        // return $request;

        $course->name = $request->name;
        $course->slug = $request->slug;
        $course->category_id = $request->category_id;
        $course->instructor_id = $request->category_id;

        // course cover
        if ($request->file('cover')) {

            // Delete old profilepicture
            if($course->cover) {
                unlink($course->cover);
            }

            $thumbnail = $request->file('cover');
            $image_full_name = time().'_'.str_replace([" ", "."], ["_","a"],$course->name).$course->id.'.'.$thumbnail->getClientOriginalExtension();
            $upload_path = 'images/frontimages/courses/';
            $image_url = $upload_path.$image_full_name;
            $success = $thumbnail->move($upload_path, $image_full_name);
            $course->cover = $image_url;
        }
        $course->regular_price = $request->regular_price;
        $course->current_price = $request->current_price;
        $course->status = '1';
        $course->short_description = $request->short_description;
        $course->description = $request->description;
        $course->materials = $request->materials;
        $course->curriculam = $request->curriculam;
        $course->status = $request->status;

	    $course->save();

        return redirect()->route('courses.show', $course->id)->with_success('Course Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
