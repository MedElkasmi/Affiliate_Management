<?php

namespace App\Http\Controllers;

use App\Models\Vertical;
use Illuminate\Http\Request;

class VerticalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        $verticals = Vertical::all();

        return view('admin.verticals.index', [
            'user' => $request->user(),
            'verticals' => $verticals
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        return view('admin.verticals.create', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'vertical' => 'required',
        ]);

        $data = new Vertical;

        $data->vertical = $request->vertical;

        $data->save();

        $notification = array(
            'message' => 'New vertical Has been Added',
            'alert-type' => 'success'
        );

        return redirect()->route('vertical.create')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vertical  $vertical
     * @return \Illuminate\Http\Response
     */
    public function show(Vertical $vertical)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vertical  $vertical
     * @return \Illuminate\Http\Response
     */
    public function edit(Vertical $vertical)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vertical  $vertical
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vertical $vertical)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vertical  $vertical
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vertical $vertical)
    {
        //
    }
}
