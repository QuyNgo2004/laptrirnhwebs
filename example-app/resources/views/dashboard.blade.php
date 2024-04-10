<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10.48.0 - CRUD User Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style_index.css">
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
</head>
<body>
<nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #DCDCDC;border: 1px solid black;">
    <div class="container" >
       
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" >
            <ul class="navbar-nav" style="margin-left: auto;margin-right: auto;">
                
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Đăng nhập</a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.createUser') }}">Đăng kí</a>
                    </li>
                
            </ul>
        </div>
    </div>
</nav>
@yield('content')
 <!-- Footer -->
 <div class="Footer" style="border: 1px solid black; margin-top: 40px">
        <div class="footer container" style="text-align: center">
            <p>Lập trình web @01/2024</p>
        </div>
    </div>
</body>
</html>
