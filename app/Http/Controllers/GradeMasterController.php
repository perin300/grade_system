<?php

namespace App\Http\Controllers;

use App\GradeMaster;
use Illuminate\Http\Request;

class GradeMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $grades = GradeMaster::all();
        return view('admin/grade/view', ['grades' => $grades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/grade/add');
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
        $input = $request->input();
        //dd($request);
        // print_r($input);
        // die;
        $save = GradeMaster::create($input);
        if ($save) {
            return redirect()->to('grade')->with('info', 'data saved.');
        }
        return redirect()->to('grade')->with('info', 'data not saved.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GradeMaster  $gradeMaster
     * @return \Illuminate\Http\Response
     */
    public function show(GradeMaster $gradeMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GradeMaster  $gradeMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(GradeMaster $gradeMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GradeMaster  $gradeMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GradeMaster $gradeMaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GradeMaster  $gradeMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $delete = GradeMaster::find($id)->delete();
        if ($delete) {
            return redirect()->to('grade')->with('info', 'data deleted.');
        }
        return redirect()->to('grade')->with('info', 'data not delete.');

    }
}
