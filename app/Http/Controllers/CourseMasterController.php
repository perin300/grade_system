<?php

namespace App\Http\Controllers;

use App\CourseMaster;
use Illuminate\Http\Request;

class CourseMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courses = CourseMaster::all();
        return view('admin/course/view', ['courses' => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/course/add');
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
        $save = CourseMaster::create($input);
        if ($save) {
            return redirect()->to('course')->with('info', 'data saved.');
        }
        return redirect()->to('course')->with('info', 'data not saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CourseMaster  $courseMaster
     * @return \Illuminate\Http\Response
     */
    public function show(CourseMaster $courseMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CourseMaster  $courseMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseMaster $courseMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CourseMaster  $courseMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseMaster $courseMaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CourseMaster  $courseMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $delete = CourseMaster::find($id)->delete();
        if ($delete) {
            return redirect()->to('course')->with('info', 'data deleted.');
        }
        return redirect()->to('course')->with('info', 'data not delete.');
    }
}
