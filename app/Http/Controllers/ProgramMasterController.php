<?php

namespace App\Http\Controllers;

use App\ProgramMaster;
use Illuminate\Http\Request;

class ProgramMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $programs = ProgramMaster::all();
        return view('admin/programme/view', ['programs' => $programs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/programme/add');
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
        $save = ProgramMaster::create($input);
        if ($save) {
            return redirect()->to('programme')->with('info', 'data saved.');
        }
        return redirect()->to('programme')->with('info', 'data not saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProgramMaster  $programMaster
     * @return \Illuminate\Http\Response
     */
    public function show(ProgramMaster $programMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProgramMaster  $programMaster
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ins =  ProgramMaster::find($id);
        return view('admin/programme/edit', ['data' => $ins]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProgramMaster  $programMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $update = ProgramMaster::where('id', $id)->update(
            [
                'Program_name'   => $request->Program_name
            ]
        );

        if ($update) {
            return redirect()->to('programme')->with('info', 'data updated.');
        }
        return redirect()->to('programme')->with('info', 'failed to update data .');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProgramMaster  $programMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $delete = ProgramMaster::find($id)->delete();
        if ($delete) {
            return redirect()->to('programme')->with('info', 'data deleted.');
        }
        return redirect()->to('programme')->with('info', 'data not delete.');

    }

    
}
