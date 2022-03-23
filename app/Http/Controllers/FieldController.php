<?php

namespace App\Http\Controllers;

use App\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Field[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        return Field::all();
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
        $Field = Field::create(
            $request->all()
        );

        return response($Field,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function show(Field $field)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function edit(Field $field)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $Field= Field::find($id );
        $Field->update([
            'name'  =>  $request->name,
            'type' =>  $request->type]);

        return response()->json([
            'success'=> true,
            'message'=> 'You have successfully updated the record'],404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $Field = Field::find($id);
        $Field ->delete();

        return response()->json([ 'success'=> true,
            'message'=> 'You have successfully updated the record'],404);
    }
}
