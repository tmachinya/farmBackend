<?php

namespace App\Http\Controllers;

use App\Input;
use Illuminate\Http\Request;

class InputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Input[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        return Input::all();
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
        $Input = Input::create(
            $request->all()
        );

        return response($Input,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function show(Input $input)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function edit(Input $input)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Input= Input::find($id );
        $Input->update([
            'date_of_delivery'  =>  $request->date_of_delivery,
            'product_name' =>  $request->product_name,
            'quantities' =>  $request->quantities,
            'unit_price'  =>  $request->unit_price,
            'supplier' =>  $request->supplier,
            'capturedBy' =>  $request->capturedBy,
            'description' =>  $request->description]);

        return response()->json([
            'success'=> true,
            'message'=> 'You have successfully updated the record'],404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $Input = Input::find($id);
        $Input ->delete();

        return response()->json([ 'success'=> true,
            'message'=> 'You have successfully updated the record'],404);
    }
}
