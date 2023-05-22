<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- my style css -->
    <link href="{{ asset('resources/css/app.css') }}" rel="stylesheet">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Home</title>
</head>

<body class="bg-primary">
    <header id="app_header" class="text-center pb-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="#">FIRST-STEPS-LARAVEL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pag1">pag1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pag2">pag1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pag3">pag1</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <h1 class="text-center text-warning m-auto"> {{$title}} </h1>

    </header>
    <!-- /#app_header -->

    <main id="app_main">
        <div class="container">
            <img src="{{$imagePath}}" alt="">
        </div>
        <!-- /.container -->
    </main>
    <!-- /#app_main -->

    <footer id="app_footer" class="text-center py-3 bg-secondary">
        <div class="container">
            <span class="text-center text-light"> Made with love &copy; powered by {{$author}}</span>
        </div>
    </footer>
    <!-- /#app_footer -->
</body>

</html>