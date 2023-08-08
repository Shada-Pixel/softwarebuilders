<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBatchRequest;
use App\Http\Requests\UpdateBatchRequest;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $batches = Batch::all();
        return view('dashboard.batches.index', compact('batches'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::where('status','3')->get();
        return view('dashboard.batches.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBatchRequest $request)
    {
        // return $request;
        $batch = Batch::create([
            'number' => $request->number,
            'course_id' => $request->course_id,
            'max_seat' => $request->max_seat,
            'start_date' => $request->start_date,
            'group_link' => $request->group_link,
            'status' => '1',
        ]);

        return redirect()->route('batches.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Batch $batch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Batch $batch)
    {
        $courses = Course::where('status','3')->get();
        return view('dashboard.batches.edit',compact('batch','courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBatchRequest $request, Batch $batch)
    {

        $batch->number = $request->number;
        $batch->course_id = $request->course_id;
        $batch->max_seat = $request->max_seat;
        $batch->start_date = $request->start_date;
        $batch->group_link = $request->group_link;
        if (!$batch->status == '3') {
            # code...
            $batch->status = $request->status;
        }
	    $batch->update();

        if ($batch){
            return redirect()->route('batches.index')
            ->withSuccess(__('Batch Update successfully.'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Batch $batch)
    {
        //
    }
}
