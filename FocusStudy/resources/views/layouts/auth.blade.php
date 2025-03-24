<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/scss/app.scss')
</head>
<body>
    <header class="header-login">
        <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
            <div class="container-fluid">
                <a href="home.html" class="btn  btn-danger">Home</a>
            </div>
            <div class="d-flex">
                <a href="form.html" class="btn  btn-danger">Sign up</a>
            </div>
        </nav>
        <h1 class="h1-login">My learning Progress</h1>
        <p><i>Study in Focus </i></p>
    </header>
    @yield('content')
    <footer>
        <span> <a class="a-login" href="https://www.instagram.com/richard_semoo/">&copy; Richard_Semo © 2024</a></span>
    </footer>
</body>
</html>