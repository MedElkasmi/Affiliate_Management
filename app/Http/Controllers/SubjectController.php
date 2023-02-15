<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Offer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SubjectController extends Controller
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
        return view('admin.offers.subjects.create', [
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
        $validatedData = $request->validate([
            'subjects' => 'required',
        ]);

        $offer_id = session('offer');
        $subjects = $validatedData['subjects'];
        $subjects_list = explode("\n", $subjects);

        foreach($subjects_list as $subject ) {
            $offersubject = new Subject;
            $offersubject->offer_id = $offer_id;
            $offersubject->subjects = $subject;
            $offersubject->save();
        }

        $notification = array(
            'message' => 'Subjects Have been Added',
            'alert-type' => 'success'
        );

        return redirect()->route('subject.create')->with($notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Subject $subject)
    {
        //

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
