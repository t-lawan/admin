<?php

namespace App\Http\Controllers;
use App\Experience;
use App\Http\Requests\StoreNewExperience;
use Illuminate\Http\Request;

class ExperiencesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      //
      $experiences = Experience::all();
      return view('admin.experiences.index', compact('experiences'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
      return view('admin.experiences.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreNewExperience $request)
  {
      //
      $experience = new Experience(request([
          'company_name',
          'role',
          'city',
          'start_date',
          'end_date'
        ]));
      auth()->user()->makeExperience($experience);

      $experiences = Experience::all();
      return view('admin.experiences.index',compact('experiences'));
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
      $experience = Experience::find($id);
      return view('admin.experiences.show', compact('experience'));
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
      Experience::find($id)->delete();
      $experiences = Experience::all();
      return view('admin.experiences.index',compact('experiences'));
  }
}
