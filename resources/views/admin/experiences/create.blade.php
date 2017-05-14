@extends('layouts.app')

@section('content')
  <h2 class="text-center"> Create experience</h2>



    <form method="post" action="{{route('experience_save')}}" class="col-md-6 col-md-offset-3">


      @include('admin.experiences.partials.form.create')


    </form>


@endsection
