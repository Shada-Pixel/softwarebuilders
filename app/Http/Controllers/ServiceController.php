<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of( Service::query())->addIndexColumn()->make(true);
        }

        return view('dashboard.services.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        // return $request;
        $service = new Service;
        $service->title = $request->name;

        // service cover
        if ($request->file('cover')) {
            $thumbnail = $request->file('cover');
            $image_full_name = time().'_'.str_replace([" ", "."], ["_","a"],$service->title).$service->id.'.'.$thumbnail->getClientOriginalExtension();
            $upload_path = 'images/frontimages/services/';
            $image_url = $upload_path.$image_full_name;
            $success = $thumbnail->move($upload_path, $image_full_name);
            $service->cover = $image_url;
        }

        // service icon
        if ($request->file('icon')) {
            $thumbnail = $request->file('icon');
            $image_full_name = time().'_'.str_replace([" ", "."], ["_","a"],$service->title).$service->id.'.'.$thumbnail->getClientOriginalExtension();
            $upload_path = 'images/frontimages/services/icon/';
            $image_url = $upload_path.$image_full_name;
            $success = $thumbnail->move($upload_path, $image_full_name);
            $service->icon = $image_url;
        }

        $service->status = '1';
        $service->short_description = $request->short_description;
        $service->description = $request->description;
	    $service->save();

        return redirect()->route('services.index')->withSuccess(__('Service created successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        $latestservices = Service::latest()->take(2)->get();
        return view('dashboard.services.show',compact('service','latestservices'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
