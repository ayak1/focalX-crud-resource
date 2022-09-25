<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/master.css') }}">
    @stack('css')
    <title>laravel crud</title>
</head>
<body>
    <div class="title"><p>CRUD</p> <div><a class="create" href={{route('student.create')}}><button>Create</button></a><a class="back" href={{route('student.index')}}><button>Back</button></a></div> </div>
    @yield('students')
    @yield('create')
    @yield('student')
    @yield('edit')
    <div class="footer"><h1>FOOTER</h1></div>
</body>
</html>