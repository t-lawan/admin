<!DOCTYPE html>
<html>
<head>
  <title>Admin Page</title>
  @include('admin.partials.styles')
</head>

<body>
  <div class="container-fluid">
    @if (Auth::guest())
  @include('admin.partials.nav.guest')
  @else
  @include('admin.partials.nav.auth')
  @endif
  </div>


    @yield('content')


    @include('admin.partials.scripts')



</body>
</html>
