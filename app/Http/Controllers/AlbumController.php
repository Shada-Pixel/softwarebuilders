<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Requests\StoreAlbumRequest;
use App\Http\Requests\UpdateAlbumRequest;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of( Album::query())->addIndexColumn()->make(true);
        }

        return view('dashboard.gallaries.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.gallaries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlbumRequest $request)
    {

        $album = new Album;
        $album->name = $request->name;
        $album->save();

        foreach ($request->cover as $photo) {
            # code...
            $photo = new Photo;

            // course cover
            if ($request->file('cover')) {
                $thumbnail = $request->file('cover');
                $image_full_name = time().'_'.$photo->id.'.'.$thumbnail->getClientOriginalExtension();
                $upload_path = 'images/frontimages/courses/';
                $image_url = $upload_path.$image_full_name;
                $success = $thumbnail->move($upload_path, $image_full_name);
                $photo->cover = $image_url;
            }

            $photo->album_id = $album->id;
            $photo->save();
        }

        return redirect()->route('albums.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlbumRequest $request, Album $album)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        //
    }
}
