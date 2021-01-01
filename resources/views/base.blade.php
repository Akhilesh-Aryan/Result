<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="bootstrap.css">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <a href="" class="navbar-brand"><h4>Result</h4></a>
        <form action="" method="get" class=" form-inline mx-auto">
            <input type="search" class="form-control" placeholder="search by name" size="70">
            <input type="submit" class="btn btn-dark" name="search" value=">">
        </form>
        <ul class="navbar-nav">
        <li class="nav-item"><a href="{{route('homepage')}}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{route('insertpage')}}" class="nav-link">Insert Records</a></li>
        </ul>
    </nav>
    @section('content')
    @show
</body>
</html>