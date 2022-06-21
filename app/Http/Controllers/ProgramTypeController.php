<?php

namespace App\Http\Controllers;

use App\ProgramType;
use Illuminate\Http\Request;

class ProgramTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $progtypes = ProgramType::all();
        return view('admin/progType/view', ['progtypes' => $progtypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/progType/add');
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
        $save = ProgramType::create($input);
        if ($save) {
            return redirect()->to('programtype')->with('info', 'data saved.');
        }
        return redirect()->to('programtype')->with('info', 'data not saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProgramType  $programType
     * @return \Illuminate\Http\Response
     */
    public function show(ProgramType $programType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProgramType  $programType
     * @return \Illuminate\Http\Response
     */
    public function edit(ProgramType $programType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProgramType  $programType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProgramType $programType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProgramType  $programType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $delete = ProgramType::find($id)->delete();
        if ($delete) {
            return redirect()->to('programtype')->with('info', 'data deleted.');
        }
        return redirect()->to('programtype')->with('info', 'data not delete.');
    }
}
