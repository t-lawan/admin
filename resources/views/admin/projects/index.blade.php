@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="panel panel-default col-md-8 col-md-offset-2">
    <div class="panel-heading text-center">Projects</div>

  </div>

  @foreach($projects as $project)
    @include('admin.projects.partials.project')
  @endforeach

</div>



@endsection
