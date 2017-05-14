@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="col-md-8 col-md-offset-2">

    <div class="well well-lg">
      <h3>{{strtoupper($project->name)}}</h3>
      <div class="row">
        <div class="col-md-8">
          <p>Description: {{$project->description}}</p>
        </div>
        <div class="col-md-2 col-md-offset-2">
          <a href="#">
            <button class="btn btn-secondary" data-toggle="collapse" data-target="#technology_form">
               <span class="glyphicon glyphicon-plus" role="button"></span>
            </button>
          </a>

        </div>
      </div>

    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4>Technologies</h4>
      </div>
    </div>

    @if($project->technologies())

      @foreach($project->technologies as $technology)
      <div class="panel panel-default col-md-8 col-md-offset-2">
        <div class="panel-heading">
          {{$technology->name}}
        </div>
      </div>

      @endforeach
    @else
      <h4 class="text-center"> No Technologies Added</h4>
    @endif




        <div class="col-md-8 col-md-offset-2 collapse" id="technology_form">
        @include('admin.technologies.partials.form.create')
        </div>


    </div>
  </div>

</div>

@endsection
