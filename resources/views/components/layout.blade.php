<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecomm test site</title>
    <link rel="shortcut icon" type="image" href="./image/logo2.png">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- fonts links -->
</head>

<body>

    <!-- top navbar -->
    <div class="top-navbar">
        {{-- <div class="top-icons">
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-instagram"></i>
        </div> --}}
        <a href="/">
            <img class="logo img-fluid" src="{{ asset('asset/image/logo.png') }}" alt="Logo" />
        </a>
        @auth
            @if (auth()->user()->email_verified_at == null)
                <span><a href="/verify">Click Here</a> to verify your account</span>
            @endif
        @endauth


        <div class="other-links d-flex align-items-center">
            @auth
                <span>
                    WELCOME <i class="fa-solid fa-user"></i>{{ auth()->user()->name }}
                </span>
                <a href="/products/create"><i class="fa-solid fa-plus"></i>Add Product</a>
                <a href="/products/manage"><i class="fa-solid fa-gear"></i>Manage Product</a>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-link ms-2" id="btn-login">Logout</button>
                </form>
            @else
                <button id="btn-login"><a href="/signin">Login</a></button>
                <button id="btn-signup"><a href="/signup">Sign up</a></button>
                <a href="/products/create"><i class="fa-solid fa-plus"></i>Add Product</a>
            @endauth

        </div>


    </div>
    <!-- top navbar -->

    {{-- <div class="home-section"> --}}
    <!-- navbar -->
    {{-- <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="./image/logo.png" alt="" width="180px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fa-solid fa-bars" style="color: white;"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="clothe.html">Clothe</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Category
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown"
                                style="background-color: #1c1c50;">
                                <li><a class="dropdown-item" href="#">T-Shirt</a></li>
                                <li><a class="dropdown-item" href="#">Hoodies</a></li>
                                <li><a class="dropdown-item" href="#">Pants</a></li>
                                <li><a class="dropdown-item" href="#">Soprts Shoes</a></li>
                                <li><a class="dropdown-item" href="#">Smart Watch</a></li>
                                <li><a class="dropdown-item" href="#">Glasess</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                    </ul>

                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit" id="search-btn">Search</button>
                    </form>
                </div>
            </div>
        </nav> --}}
    <!-- navbar -->





    <!-- home content -->
    {{-- <section class="home">
            <div class="content">
                <h3>Biggest Clothe Sale
                    <br> <span>Up To 50% Off</span>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque culpa, totam sed maxime animi
                    facilis!</p>
                <button id="shopnow">Shop Now</button>
            </div>
            <div class="img">
                <img src="./image/b2.png" alt="">
            </div>
        </section> --}}
    <!-- home content -->
    {{-- </div> --}}

    <!-- top cards -->
    {{-- <div class="container" id="top-cards">
        <div class="row">
            <div class="col-md-5 py-3 py-md-0">
                <div class="card" style="background-color: #a9a9a926;">
                    <img src="./image/topcard1.png" alt="">
                    <div class="card-img-overlay">
                        <h5 class="card-titel">Smart Watch</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, ratione!</p>
                        <p><strong>$200.30 <strike>$250.10</strike></strong></p>
                        <button>Order Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card" style="background-color: #a9a9a926;">
                    <img src="./image/topcard2.png" alt="">
                    <div class="card-img-overlay">
                        <h5 class="card-titel">Nike Shoes</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, ratione!</p>
                        <p><strong>$150.10 <strike>$200.10</strike></strong></p>
                        <button>Order Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card" style="background-color: #a9a9a926;">
                    <img src="./image/topcard3.png" alt="">
                    <div class="card-img-overlay">
                        <h5 class="card-titel">Bag</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        <p><strong>$50.10 <strike>$60</strike></strong></p>
                        <button>Order Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- top cards -->






    <main>
        <x-flash-message />

        {{ $slot }}
    </main>

    <!-- footer -->
    {{-- <footer
        class="fixed-bottom left-0 w-100 d-flex align-items-center justify-content-start font-weight-bold bg-dark text-white h-50 mt-24 opacity-90 justify-content-md-center mt-10">
        <p> </p>
        <a href="/products/create"
            class="position-absolute top-50 end-3 bg-black text-white py-2 px-5 translate-middle-y">Post Job</a>
    </footer> --}}

    <!-- footer -->

    <a href="#" class="arrow"><i><img src="./image/up-arrow.png" alt="" width="50px"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
