<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Network;
use App\Models\Vertical;
use App\Models\Location;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $locations = $offer->locations;
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

            $offer = Offer::find(5);
            $data = [
                'user' => $request->user(),
                'networks' => Network::all(),
                'verticals' => Vertical::all(),
                'locations' => $offer->locations,
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
                'geos.*' => 'required'
            ]);
        
            $offerData = $validatedData + [
                
            'offer' => $validatedData['offer'], 
            'sid' => $validatedData['sid'], 
            'network_id' => $validatedData['network'], 
            'description' => $validatedData['desc'], 
            'payout' => $validatedData['payout'], 
            'vertical_id' => $validatedData['vertical'], 
            'type' => $validatedData['iCheck']
        ];

            $offer = Offer::create($offerData);
        
            $locationData = [];
            foreach ($validatedData['geos'] as $geo) {
                $locationData[] = [
                    'offer_id' => $offer->id,
                    'geo' => $geo
                ];
            }
        
            Location::insert($locationData);

            $notification = array(
                'message' => 'New Offer Has been Added',
                'alert-type' => 'success'
            );

            return redirect()->route('offer.create')->with($notification);
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
    public function edit(Offer $offer)
    {
        //
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
}
