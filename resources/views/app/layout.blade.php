<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('css/app.css')}}" type="text/css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Hello, world!</title>
</head>
<body>
<div class="container">
{{--    <nav class="navbar navbar-dark bg-primary">--}}
    <nav class="site-header sticky-top py-1">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" href="{{route('/')}}" aria-label="Product">
                <img src="{{asset('/img/rdw.png')}}" class="rdw-logo" alt="rdw-img" width="75" height="27">
            </a>

            <a class="py-2  d-md-inline-block" href="{{Route('/')}}">Home</a>
            <a class="py-2 d-none d-md-inline-block" href="{{Route('get-ten-cars')}}">First Ten Cars</a>
            <a class="py-2 d-none d-md-inline-block" href="{{route('cars-by-date', ['date' => '20130622'])}}">First ten with the date</a>
            <a class="py-2 d-none d-md-inline-block" href="{{route('cars-by-brand', ['brand' => 'FIAT'])}}">First ten with the brand</a>
            <a class="py-2 d-none d-md-inline-block" href="{{route('all-tables', ['date' => '20190513', 'brand' => 'FIAT'])}}">All Tables</a>
        </div>
    </nav>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('section')

    <footer class="footer mt-auto py-3 fixed-bottom">
        <div class="container">
            <span class="text-muted">&copy; Redouan Sellami</span>
        </div>
    </footer>
</div>
</body>
</html>
