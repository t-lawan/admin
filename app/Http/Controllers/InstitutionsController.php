<?php

namespace App\Http\Controllers;
use App\Institution;
use Illuminate\Http\Request;
use App\Http\Requests\StoreNewInstitution;

class InstitutionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $institutions = Institution::all();
        return view('admin.institutions.index', compact('institutions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.institutions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewInstitution $request)
    {
        //
        $institution = new Institution(request([
            'name',
            'degree',
            'city',
            'start_date',
            'end_date'
          ]));
        auth()->user()->makeInstitution($institution);

        $institutions = Institution::all();
        return view('admin.institutions.index',compact('institutions'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $institution = Institution::find($id);
        return view('admin.institutions.show', compact('institution'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Institution::find($id)->delete();
        $institutions = Institution::all();
        return view('admin.institutions.index',compact('institutions'));
    }
}
