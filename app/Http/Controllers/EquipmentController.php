<?php

namespace App\Http\Controllers;

use App\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Equipment[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        return Equipment::all();
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
        $Equipment = Equipment::create(
            $request->all()
        );

        return response($Equipment,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function show(Equipment $equipment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipment $equipment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     //* @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request  $request,$id)
    {
        $Equipment = Equipment::find($id );
        $Equipment->update([
            'name'  =>  $request->name,
            'description' =>  $request->description
        ]);

        return response()->json([
            'success'=> true,
            'message'=> 'You have successfully updated the record'],404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Equipment = Equipment::find($id);
        $Equipment ->delete();

        return response()->json([ 'success'=> true,
            'message'=> 'You have successfully updated the record'],404);

    }
}
