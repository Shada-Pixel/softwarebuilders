<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Enrollment;
use App\Models\EnrollmentItem;
use App\Models\Course;
use App\Models\Batch;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreEnrollmentRequest;
use App\Http\Requests\UpdateEnrollmentRequest;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        // $enrollment = Enrollment::first();
        // return $enrollment;

        if ($request->ajax()) {
            return Datatables::of( Enrollment::query())->addIndexColumn()->make(true);
        }

        return view('dashboard.enrollments.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEnrollmentRequest $request)
    {
        $enrollment = new Enrollment;
        $enrollment->trxid =$request->trxid;
        $enrollment->total =$request->total;
        $enrollment->bkash_number =$request->bkash_number;
        $enrollment->user_id = Auth::user()->id;
        $enrollment->save();

        for ($i=0; $i < count($request->cartid); $i++) {

            $enrollmentItem = new EnrollmentItem;
            $enrollmentItem->user_id = Auth::user()->id;
            $enrollmentItem->course_id = $request->courseid[$i];
            $upcommingbatch = Batch::where('course_id',$request->courseid[$i])->where('status','1')->first();

            if ($upcommingbatch ) {
                $enrollmentItem->batch_id = $request->$upcommingbatch->id;
            }

            $enrollmentItem->enrollment_id = $enrollment->id;
            $enrollmentItem->save();


            $delatablecart = Cart::find($request->cartid[$i]);
            $delatablecart->delete();

        }


        return redirect()->route('profile.ecources');
    }

    /**
     * Display the specified resource.
     */
    public function show(Enrollment $enrollment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enrollment $enrollment)
    {
        return view('dashboard.enrollments.edit',compact('enrollment'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEnrollmentRequest $request, Enrollment $enrollment)
    {
        // return $enrollment;
        $enrollment->status = $request->status;
        $enrollment->update();

        $enrollmentItems = EnrollmentItem::where('enrollment_id', $enrollment->id)->get();

        foreach ($enrollmentItems as $enrollmentItem) {
            $enrollmentItem->status = $request->status;
            $enrollmentItem->update();
        }

        return  redirect("/enrollments/$enrollment->id/edit");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enrollment $enrollment)
    {
        //
    }
}
