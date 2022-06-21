<?php

namespace App\Http\Controllers;

use App\ProgramCategory;
use Illuminate\Http\Request;

class ProgramCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $progcats = ProgramCategory::all();
        return view('admin/progcat/view', ['progcats' => $progcats]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/progcat/add');
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
        $save = ProgramCategory::create($input);
        if ($save) {
            return redirect()->to('programcat')->with('info', 'data saved.');
        }
        return redirect()->to('programcat')->with('info', 'data not saved.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProgramCategory  $programCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProgramCategory $programCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProgramCategory  $programCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ins =  ProgramCategory::find($id);
        return view('admin/progcat/edit', ['data' => $ins]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProgramCategory  $programCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $update = ProgramCategory::where('id', $id)->update(
            [
                'ProgCat_name'   => $request->ProgCat_name
            ]
        );

        if ($update) {
            return redirect()->to('programcat')->with('info', 'data updated.');
        }
        return redirect()->to('programcat')->with('info', 'failed to update data .');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProgramCategory  $programCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $delete = ProgramCategory::find($id)->delete();
        if ($delete) {
            return redirect()->to('programcat')->with('info', 'data deleted.');
        }
        return redirect()->to('programcat')->with('info', 'data not delete.');
    }
}
