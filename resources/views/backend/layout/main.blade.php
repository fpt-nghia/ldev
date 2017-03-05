<!DOCTYPE html>
<html lang="en">
<head>
  @section('head')
    @include('backend.layout.partial.head')
  @show
</head>
<body>

@include('backend.layout.partial.header')

@include('backend.layout.partial.navbar')

@include('backend.layout.partial.search')

<div id="sidebar">
  @section('sidebar')
    @include('backend.layout.partial.sidebar')
  @show
</div>
<div id="content">
  <div id="content-header">
    @include('backend.layout.partial.breadcrumb')
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        @include('backend.layout.partial.flash')
        @include ('backend.layout.partial.error')
        @yield('content')
      </div>
    </div>
  </div>
</div>

@include('backend.layout.partial.footer')

@section('bottom')
  @include('backend.layout.partial.bottom')
@show
</body>
</html>