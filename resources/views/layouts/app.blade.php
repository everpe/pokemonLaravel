<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Poke- @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"crossorigin="anonymous">

</head>

<body>
    
    <nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">Pokemon</a>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    
</body>
</html>