<?php

namespace App\Http\Controllers;

use App\Models\Creative;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CreativeController extends Controller
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
        return view('admin.offers.creatives.create', [
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
        if($request->file('creative') && $request->file('footer')) {

            $request->validate([
                'creative_name' => 'required',
                'creative' => 'required|image',
                'footer' => 'required|image',
            ]);

            $data = new Creative;
            $offer_id = session('offer');

            $data->creative_name = $request->input('creative_name');
            $data->offer_id = $offer_id;

            $creative = $request->file('creative');
            $footer = $request->file('footer');
            
            $creative_path = str::random(20).$creative->getClientOriginalName();
            $creative->move(public_path('upload/creatives'),$creative_path);
            $data->creative_image = $creative_path;

            $footer_path = str::random(20).$footer->getClientOriginalName();
            $footer->move(public_path('upload/footers'),$footer_path);
            $data->creative_footer = $footer_path;
        }

        $data->save();

        $notification = array(
            'message' => 'Creative Image Added',
            'alert-type' => 'success'
        );

        return redirect()->route('offer.edit',[$offer_id])->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Creative  $creative
     * @return \Illuminate\Http\Response
     */
    public function show(Creative $creative)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Creative  $creative
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Creative $creative)
    {
        //
        return view('admin.offers.creatives.edit', [
            'user' => $request->user(),
            'creative' => $creative,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Creative  $creative
     * @return \Illuminate\Http\Response
     */

    const RANDOM_STRING_LENGTH = 20;
    public function update(Request $request, Creative $creative)
    {
        try {
            $validatedData = $request->validate([
                'creative_name' => 'required',
                'creative_image' => 'required',
                'creative_footer' => 'required',
            ]);

            $creative_image = $request->file('creative_image');
            $creative_footer = $request->file('creative_footer');

            $creative_path = Str::random(self::RANDOM_STRING_LENGTH) . $creative_image->getClientOriginalName();
            $creative_image->move(public_path('upload/creatives'), $creative_path);

            $footer_path = Str::random(self::RANDOM_STRING_LENGTH) . $creative_footer->getClientOriginalName();
            $creative_footer->move(public_path('upload/footers'), $footer_path);

            $creative->update([
                'creative_name' => $validatedData['creative_name'],
                'creative_image' => $creative_path,
                'creative_footer' => $footer_path
            ]);

            $notification = [
                'message' => 'creative image updated',
                'alert-type' => 'success'
            ];

            return redirect()->route('creative.edit', ['creative' => $creative])->with($notification);

        } catch (\Exception $e) {
            // Handle the error

            $notification = [
                'message' => 'Something Went Wrong!!',
                'alert-type' => 'danger'
            ];

            return redirect()->route('creative.edit', ['creative' => $creative])->with($notification);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Creative  $creative
     * @return \Illuminate\Http\Response
     */
    public function destroy(Creative $creative)
    {
        //
        $creative->delete();

        return redirect()->route('creative.edit', ['creative' => $creative]);
    }
}
