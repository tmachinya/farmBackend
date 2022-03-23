<?php

namespace App\Http\Controllers;

use App\Crop;
use Illuminate\Http\Request;

class CropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Crop[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        return Crop::all();
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
        $Crop = Crop::create(
            $request->all()
        );

        return response($Crop,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Crop  $crop
     * @return \Illuminate\Http\Response
     */
    public function show(Crop $crop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Crop  $crop
     * @return \Illuminate\Http\Response
     */
    public function edit(Crop $crop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Crop  $crop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $Crop = Crop::find($id );
        $Crop->update([
            'name'  =>  $request->name,
            'type' =>  $request->type,
            'supplier' =>  $request->supplier]);

        return response()->json([
            'success'=> true,
            'message'=> 'You have successfully updated the record'],404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Crop  $crop
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $Crop = Crop::find($id);
        $Crop ->delete();

        return response()->json([ 'success'=> true,
            'message'=> 'You have successfully updated the record'],404);

    }
}
