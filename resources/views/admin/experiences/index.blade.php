@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="panel panel-default col-md-8 col-md-offset-2">
    <div class="panel-heading text-center">Experience</div>

  </div>

  @foreach($experiences as $experience)
    @include('admin.experiences.partials.experience')
  @endforeach

</div>



@endsection
