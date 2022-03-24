<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Activity[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        return Activity::all();
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $Activity = Activity::create(
                $request->all()
            );

            return response($Activity, 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Activity $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Activity $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Activity $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        {
            $Activity = Activity::find($id);
            $Activity->update([
                'name' => $request->name,
                'description' => $request->description,
                'crop' => $request->crop
            ]);

            return response()->json([
                'success' => true,
                'message' => 'You have successfully updated the record'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Activity $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            $Activity = Activity::find($id);
            $Activity->delete();

            return response()->json(['success' => true,
                'message' => 'You have successfully updated the record'], 404);

        }
    }
}
