@extends('layouts.app')

@section('content')
  <h2 class="text-center"> Add Institution</h2>



    <form method="post" action="{{route('institution_save')}}" class="col-md-6 col-md-offset-3">


      @include('admin.institutions.partials.form.create')


    </form>


@endsection
