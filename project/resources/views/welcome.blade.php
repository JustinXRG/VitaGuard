<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VitaGuard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- default css buat semua page -->
    @vite('resources/css/app.css')

    <!-- css buat welcome.blade.php -->
    @vite('resources/css/pages/welcome.css')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent navbar-custom">

        <a class="navbar-brand" href="#">
            <b>Vita</b>Guard
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Chat Dokter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Konsultasi Offline</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Daftar Dokter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Riwayat Konsultasi</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary text-light    ml-2">Daftar Akun</a>
                </li>
            </ul>
        </div>

    </nav>

    <div id="carouselExampleIndicators" class="carousel slide carousel-custom" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <picture>
                    <source srcset="/assets/images/hero-bg.webp" type="image/webp">
                    <img class="d-block w-100" src="/assets/images/hero-bg.jpg">
                </picture>

                <div class="carousel-caption d-none d-md-block">
                    <h5>Lorem ipsum</h5>
                    <p>Lorem ipsum dolor sit amet...</p>
                </div>
            </div>

            <div class="carousel-item">
                <picture>
                    <source srcset="/assets/images/hero-bg.webp" type="image/webp">
                    <img class="d-block w-100" src="/assets/images/hero-bg.jpg">
                </picture>

                <div class="carousel-caption d-none d-md-block">
                    <h5>Lorem ipsum</h5>
                    <p>Lorem ipsum dolor sit amet...</p>
                </div>
            </div>

            <div class="carousel-item">
                <picture>
                    <source srcset="/assets/images/doctor.webp" type="image/webp">
                    <img class="d-block w-100" src="/assets/images/hero-bg.jpg">
                </picture>

                <div class="carousel-caption d-none d-md-block">
                    <h5>Lorem ipsum</h5>
                    <p>Lorem ipsum dolor sit amet...</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">
        <h5>Artikel Kesehatan Terkini untuk Anda</h5>
    </div>
</body>

</html>