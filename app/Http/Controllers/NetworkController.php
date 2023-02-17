<?php

namespace App\Http\Controllers;

use App\Models\Network;
use Illuminate\Http\Request;

class NetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        $networks = Network::all();

        return view('admin.networks.index', [
            'user' => $request->user(),
            'networks' => $networks
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
        return view('admin.networks.create', [
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
            'networkID' => 'required',
            'network' => 'required',
            'urlpath' => 'required',
            'username' => 'required',
            'password' => 'required',
            'apikey' => 'required',
        ]);

        $data = new Network;

        $data->networkID = $request->networkID;
        $data->network = $request->network;
        $data->urlpath = $request->urlpath;
        $data->username = $request->username;
        $data->password = $request->password;
        $data->apikey = $request->apikey;

        $data->save();

        $notification = array(
            'message' => 'New Network Has been Added',
            'alert-type' => 'success'
        );

        return redirect()->route('network.create')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Network  $network
     * @return \Illuminate\Http\Response
     */
    public function show(Network $network)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Network  $network
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Network $network)
    {
        //
        return view('admin.networks.edit', [
            'user' => $request->user(),
            'network' => $network,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Network  $network
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Network $network)
    {
        //
        $validatedData = $request->validate([
            'network' => 'required|min:5',
        ]);
    
        $network->update($validatedData);

        return redirect()->route('network.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Network  $network
     * @return \Illuminate\Http\Response
     */
    public function destroy(Network $network)
    {
        //
    }
}
