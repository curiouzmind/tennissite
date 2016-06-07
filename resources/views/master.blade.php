<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title') | Tennis Site</title>
    <meta name="description" content="@yield('description')" />
    <!-- Stylesheets -->
    @yield('stylesheets')
    <link rel="stylesheet" href="{{asset ('css/tennissite.css')}}">
</head>
<body>
    <div class="wrapper">
        {{--header--}}
        <header>
            @include('includes.header')
        </header>
        {{--Content--}}
        <main class="content" role="main">
            @yield('content')
        </main>
        {{--footer--}}
        <footer>
            @include('includes.footer')
        </footer>
    </div>

<script src="{{asset ('js/app.js')}}"></script>
<script>
    function copyright(companyName) {
        var date = new Date();
        var currentYear = date.getFullYear();
        var copyInfo = "All Rights Reserved";
        var companyName = companyName;
        document.getElementById('copyright').innerHTML = "&copy;" + currentYear + ", " + companyName + ". " + copyInfo;
    }
    $(document).ready(function() {
        copyright("Tennis Site Inc");
    });

    var hamburger = document.querySelector(".hamburger");
    hamburger.addEventListener("click", function() {
        hamburger.classList.toggle("is-active");
    });
</script>
@yield('scripts')
</body>
</html>