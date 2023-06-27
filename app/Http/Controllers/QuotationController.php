<?php

namespace App\Http\Controllers;

use App\Models\Quotation;
use Illuminate\Http\Request;
use App\Http\Requests\StoreQuotationRequest;
use App\Http\Requests\UpdateQuotationRequest;

class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of( Quotation::query())->addIndexColumn()->make(true);
        }

        return view('dashboard.quotations.index');
    }


        /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function show(Quotation  $quotation)
    {
        $quotation->update(['status'=> '2']);
        return view('dashboard.quotations.show',compact('quotation'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Create()
    {
        return view('dashboard.quotations.create');
    }





    public function replay(Request $request)
    {

        // return $request;
        $sender = Query::find($request->sender);
        $msg = $request->message;
        try{
            $sendmail =    Mail::to($sender->email)->send(new QueryMail($msg));
        }catch (\Exception $exception){}

        // return response()->json(['status' => 'success', 'message' => 'Replied successfylly !']);
        return redirect()->route('quaries.all');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQueryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQueryRequest $request)
    {

        $subscribe = Query::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        $msg = Setting::where('property','contactxt')->first()->value;

        if ($subscribe) {
            try{
                $sendmail =    Mail::to($subscribe->email)->send(new QueryMail($msg));
            }catch (\Exception $exception){}

            return response()->json(['status' => 'success', 'message' => 'Thanks for contucting us. We wil get to you soon.']);
        }else{
            return response()->json(['status' => 'error', 'message' => 'Something wrong !']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Query  $query
     * @return \Illuminate\Http\Response
     */
    public function read (Query $query)
    {
        if ($query->status == 'unreaded') {
            $query->status = 'readed' ;
            $query->update();
        }
        return view('dashboard.quaries.read',compact('query'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Query  $query
     * @return \Illuminate\Http\Response
     */
    public function edit(Query $query)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQueryRequest  $request
     * @param  \App\Models\Query  $query
     * @return \Illuminate\Http\Response
     */
    public function toggle(UpdateQueryRequest $request, $id)
    {
        $query = Query::find($id);
        $query->status = $request->updateStatus;
        $query->update();
        return response()->json(['status'=>'success','message'=>'Message mark as '.(($request->updateStatus == 'unreaded' ?'readed':'unreaded')).' !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Query  $query
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Query::find($id);
        $category->delete();
        return response()->json(['status' => 'success', 'message' => 'Message deleted successfylly !']);
    }
}
