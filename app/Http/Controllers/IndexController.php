<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;
use App\Models\Vertical;

class IndexController extends Controller
{
    //

    public function index(Request $request) {

        try {

            $offers = Offer::all();
            $data = [
                'user' => $request->user(),
                'offers' => $offers,
            ];
        
            return view('admin.index', $data);
        } 
        
        catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while loading the data. Please try again later.');
        }

    }
}
