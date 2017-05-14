@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="col-md-8 col-md-offset-2">

    <div class="well well-lg">
      <h1>{{strtoupper($institution->name)}}</h1>
      <div class="row">
        <div class="col-md-8">
          <h3>Degree: {{$institution->degree}}</h3>
        </div>
        <div class="col-md-2 col-md-offset-2">
          <a href="#">
            <button class="btn btn-secondary" data-toggle="collapse" data-target="#duty_form">
              Add Subject
            </button>
          </a>

        </div>
      </div>

    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4>Subject</h4>
      </div>
    </div>

    @if($institution->subjects())

      @foreach($institution->subjects as $subject)
      <div class="panel panel-default col-md-8 col-md-offset-2">
        <div class="panel-heading">

          <span class="lead">
             {{$subject->name}} : {{$subject->grade}}
          </span>
          <span class="pull-right">

            @include('admin.subjects.partials.form.delete')
          </span>
        </div>
      </div>

      @endforeach
    @else
      <h4 class="text-center"> No subjects Added</h4>
    @endif




        <div class="col-md-8 col-md-offset-2 collapse" id="duty_form">
        @include('admin.subjects.partials.form.create')
        </div>


    </div>
  </div>

</div>

@endsection
