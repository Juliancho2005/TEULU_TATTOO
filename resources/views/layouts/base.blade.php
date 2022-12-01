<!DOCTYPE html>
<html lang="en">
<head>
    <title>Teulu Tattoo</title>
    <link rel="stylesheet" href="/static/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="container">
            <p class="logo">Teulu <br> Tatoo </p>
            <nav>
                <a href="favorites-header">favorites</a>
                <a href="#sign-up-header">Sign up</a>
                <a href="#menu-header">menu</a>
            </nav>
        </div>
    </header>

    <div class="content">
        @yield('content')
    </div>

    

    <footer>
        <div class="footer-container">
            <p>&copy; TeuluTattoo 2022</p>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>


</body>
</html>