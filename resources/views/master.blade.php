<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand">RAJAT SAHA</a>
            <ul class="navbar-nav">
                <li><a href="{{ route('about') }}" class="nav-link"><i class="fa-solid fa-address-card"></i> About</a></li>
                <li><a href="{{ route('my-work') }}" class="nav-link"><i class="fa-sharp fa-solid fa-house-laptop"></i> My Work</a></li>
                <li><a href="{{ route('find-developer') }}" class="nav-link"><i class="fa-regular fa-user"></i> Find Developer</a></li>
                <li><a href="{{ route('account') }}" class="nav-link"><i class="fa-solid fa-lock"></i> Account</a></li>
            </ul>
        </div>
    </nav>

    @yield('body')

    <section class="py-5 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-white bg-danger">
                        <div class="card-header text-center">Popular Developer</div>
                        <div class="card-body">
                            <p>Web Development</p>
                            <p>Web Design</p>
                            <p>Android Development</p>
                            <p>Ecommerce Software Development</p>
                            <p>POS Software Development</p>
                            <p>Customized Software Development</p>
                            <p>Accounting Software Development</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-dark bg-info">
                        <div class="card-header text-center">Popular Job</div>
                        <div class="card-body">
                            <p>Web Development</p>
                            <p>Web Design</p>
                            <p>Android Development</p>
                            <p>Ecommerce Software Development</p>
                            <p>POS Software Development</p>
                            <p>Customized Software Development</p>
                            <p>Accounting Software Development</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-success">
                        <div class="card-header text-center">Popular Services</div>
                        <div class="card-body">
                            <p>Web Development</p>
                            <p>Web Design</p>
                            <p>Android Development</p>
                            <p>Ecommerce Software Development</p>
                            <p>POS Software Development</p>
                            <p>Customized Software Development</p>
                            <p>Accounting Software Development</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-3 m-auto bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">Design & Develop By <b>Rajat Saha</b></p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
