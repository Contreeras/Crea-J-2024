<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion de index</title>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('assets2/css/Style.css')}}">
    <link rel="icon" href="{{ url('assets2/img/calavera-mexicana.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://kit.fontawesome.com/beae16a269.js" crossorigin="anonymous"></script>
</head>
<body>
    @include('layouts.partials.navbar')


    @yield('content')
        

    <script src="{{ url('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>