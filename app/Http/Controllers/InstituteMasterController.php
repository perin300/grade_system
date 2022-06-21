<?php

namespace App\Http\Controllers;

use App\InstituteMaster;
use Illuminate\Http\Request;

class InstituteMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $institutes = InstituteMaster::all();
        return view('admin/institute/view', ['institutes' => $institutes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/institute/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->input();
        //dd($request);
        // print_r($input);
        // die;
        $save = InstituteMaster::create($input);
        if ($save) {
            return redirect()->to('institute')->with('info', 'data saved.');
        }
        return redirect()->to('institute')->with('info', 'data not saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InstituteMaster  $instituteMaster
     * @return \Illuminate\Http\Response
     */
    public function show(InstituteMaster $instituteMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InstituteMaster  $instituteMaster
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ins =  InstituteMaster::find($id);
        return view('admin/institute/edit', ['data' => $ins]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InstituteMaster  $instituteMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = InstituteMaster::where('id', $id)->update(
            [
                'Institute_name'   => $request->Institute_name
            ]
        );

        if ($update) {
            return redirect()->to('institute')->with('info', 'data updated.');
        }
        return redirect()->to('institute')->with('info', 'failed to update data .');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InstituteMaster  $instituteMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $delete = InstituteMaster::find($id)->delete();
        if ($delete) {
            return redirect()->to('institute')->with('info', 'data deleted.');
        }
        return redirect()->to('institute')->with('info', 'data not delete.');
    }
}
