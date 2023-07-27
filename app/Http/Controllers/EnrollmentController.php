<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Enrollment;
use App\Models\Course;
use App\Models\Batch;
use App\Models\EnrollmentItem;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreEnrollmentRequest;
use App\Http\Requests\UpdateEnrollmentRequest;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEnrollmentRequest $request, Enrollment $enrollment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enrollment $enrollment)
    {
        //
    }
}
