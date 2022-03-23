<?php

namespace App\Http\Controllers;

use App\Process;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Process[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        return Process::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Process = Process::create(
            $request->all()
        );

        return response($Process,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function show(Process $process)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function edit(Process $process)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Process = Process::find($id );
        $Process->update([
            'field_name'  =>  $request->field_name,
            'date_started' =>  $request->date_started,
            'activity' =>  $request->activity,
            'input_name'  =>  $request->input_name,
            'quantity' =>  $request->quantity,
            'description' =>  $request->description,
            'supplier'  =>  $request->supplier,
            'date_ended' =>  $request->date_ended,
            'comment' =>  $request->comment]);



        return response()->json([
            'success'=> true,
            'message'=> 'You have successfully updated the record'],404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Process = Process::find($id);
        $Process ->delete();

        return response()->json([ 'success'=> true,
            'message'=> 'You have successfully updated the record'],404);
    }
}
