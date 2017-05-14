@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="panel panel-default col-md-8 col-md-offset-2">
    <div class="panel-heading text-center">Institutions</div>

  </div>

  @foreach($institutions as $institution)
    @include('admin.institutions.partials.institution')
  @endforeach

</div>



@endsection
