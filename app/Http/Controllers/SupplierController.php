<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Supplier[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        return Supplier::all();
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

        $Supplier = Supplier::create(
            $request->all()
        );

        return response($Supplier,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request,  $id)
    {
        $Supplier = Supplier::find($id );
        $Supplier->update([
            'name'  =>  $request->name,
            'type' =>  $request->type,]);

        return response()->json([
            'success'=> true,
            'message'=> 'You have successfully updated the record'
        ],
            404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {
        //$id = $supplier.id;
        $Supplier = Supplier::find($id);
        $Supplier ->delete();

        //return response($Supplier,201);
        return response()->json([ 'success'=> true,
            'message'=> 'You have successfully updated the record'],404);

    }
}
