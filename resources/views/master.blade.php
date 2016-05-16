<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--  <meta name="_token" content="{!! csrf_token() !!}"/> -->
    <title> @yield('title') | Tennis Site</title>
    <meta name="description" content="@yield('description')" />
    <!-- Stylesheets -->
    @yield('stylesheets')
    <link rel="stylesheet" href="{{asset ('css/app.css')}}">
</head>
<body>
    <div class="wrapper">
        {{--header--}}
        @include('includes.header')
        {{--Content--}}
        @yield('content')
        {{--footer--}}
        @include('includes.footer')
    </div>

<script src="{{asset ('js/app.js')}}"></script>
@yield('scripts')
</body>
</html>