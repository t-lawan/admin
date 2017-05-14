@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="col-md-8 col-md-offset-2">

    <div class="well well-lg">
      <h3>{{strtoupper($experience->company_name)}}</h3>
      <div class="row">
        <div class="col-md-8">
          <p>Description: {{$experience->role}}</p>
        </div>
        <div class="col-md-2 col-md-offset-2">
          <a href="#">
            <button class="btn btn-secondary" data-toggle="collapse" data-target="#duty_form">
              Add Duty
            </button>
          </a>

        </div>
      </div>

    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4>Duties</h4>
      </div>
    </div>

    @if($experience->duties())

      @foreach($experience->duties as $duty)
      <div class="panel panel-default col-md-8 col-md-offset-2">
        <div class="panel-heading">

          <span class="lead">
             {{$duty->description}}
          </span>
          <span class="pull-right">

            @include('admin.duties.partials.form.delete')
          </span>
        </div>
      </div>

      @endforeach
    @else
      <h4 class="text-center"> No duties Added</h4>
    @endif




        <div class="col-md-8 col-md-offset-2 collapse" id="duty_form">
        @include('admin.duties.partials.form.create')
        </div>


    </div>
  </div>

</div>

@endsection
