<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Subject;
use App\Models\From;
use App\Models\Network;
use App\Models\Vertical;
use App\Models\Location;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        try {

            $data = [
                'user' => $request->user(),
                'networks' => Network::all(),
                'verticals' => Vertical::all(),
            ];
        
            return view('admin.offers.create', $data);
        } 
        
        catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while loading the data. Please try again later.');
        }  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'offer' => 'required',
            'sid' => 'required',
            'network_id' => 'required',
            'description' => 'required',
            'payout' => 'required|numeric',
            'vertical_id' => 'required',
            'type' => 'required',
            'geos' => 'required'
        ]);
    
        $offer = new Offer;
        $offer->offer = $validatedData['offer'];
        $offer->sid = $validatedData['sid'];
        $offer->network_id = $validatedData['network_id'];
        $offer->description = $validatedData['description'];
        $offer->payout = $validatedData['payout'];
        $offer->vertical_id = $validatedData['vertical_id'];
        $offer->type = $validatedData['type'];
        $offer->status = 'Active';
        $offer->save();
    
        $valid_geos = $validatedData['geos'];

        foreach ($valid_geos as $geo) {
            $location = new Location;
            $location->offer_id = $offer->id;
            $location->geo = $geo;
            $location->save();
        }

        $notification = array(
            'message' => 'New Offer Has been Added',
            'alert-type' => 'success'
        );

        return redirect()->route('dashboard')->with($notification);
    }

    public function getOffer(Request $request){

        $this->validate($request, [
            'offer_id' => 'required|numeric',
            'network_id' => 'required|numeric',
        ]);

        $endpoint = 'https://api.eflow.team/v1/affiliates/offers/'. $request->offer_id;

        $apikey = Network::get_apikey($request->network_id);
        
        $response = Http::withHeaders([
            "X-Eflow-API-Key" => $apikey,
        ])->get($endpoint);

        $responseBody = json_decode($response, true);

        $data = [
            'user' => $request->user(),
            'networks' => Network::all(),
            'verticals' => Vertical::all(),
            'responseBody' => $responseBody,
        ];

        return view('admin.offers.create', $data);
    }
            

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer, Request $request)
    {
        // 'subjects' => $offer->subjects, to call all related subject with given offer
        try {

            $data = [
                'user' => $request->user(),
                'subjects' => $offer->subjects,
                'froms' => $offer->froms,
                'creatives' => $offer->creatives,
                'links' => $offer->links,
                'offers' => Offer::all(),
            ];

            session(['offer' => $offer->id]);
        
            return view('admin.offers.edit', $data);
        } 
        
        catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while loading the data. Please try again later.');
        } 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        //
    }

    public function updateStatus(Request $request) {
        
    $offerId = $request->input('offerId');
    $status = $request->input('status');

    // Update offer status in database
    $offer = Offer::findOrFail($offerId);
    $offer->status = $status;
    $offer->save();

    // Return response
    return response()->json([
        'status' => 'success',
        'message' => 'Offer status updated successfully.'
    ]);
}

}
