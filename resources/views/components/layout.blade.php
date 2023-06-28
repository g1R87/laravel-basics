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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/breakpoints.css') }}">

</head>

<body>
    <nav class="navbar navbar-expand">
        <div class="container">
            <a href="/">
                <img class="navbar-brand logo" src="{{ asset('asset/image/logo.png') }}" alt="Logo" />
            </a>
            @auth
                @if (auth()->user()->email_verified_at == null)
                    <div class="navbar-text"><a href="/verify">Click Here</a> to verify your account</div>
                @endif
            @endauth
            <ul class="navbar-nav gap-2">
                @auth
                    <li class="nav-item"> WELCOME <i class="fa-solid fa-user"></i>{{ auth()->user()->name }}</li>

                    <li class="nav-item"><a href="/products/create"><i class="fa-solid fa-plus"></i>Add Product</a></li>
                    <li class="nav-item">
                        <a href="/products/manage"><i class="fa-solid fa-gear"></i>Manage Product</a>



                    </li>
                    <li class="nav-item">

                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-link ms-2" id="btn-login">Logout</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item"><button id="btn-login"><a href="/signin">Login</a></button></li>
                    <li class="nav-item"><button id="btn-signup"><a href="/signup">Sign up</a></button></li>
                    <li class="nav-item"><a href="/products/create"><i class="fa-solid fa-plus"></i>Add Product</a></li>
                @endauth

            </ul>

        </div>
    </nav>



    </div>








    <main>
        <x-flash-message />

        {{ $slot }}
    </main>

    <!-- footer -->
    {{-- <footer --}}
    {{-- class="fixed-bottom left-0 w-100 d-flex align-items-center justify-content-start font-weight-bold bg-dark text-white h-50 mt-24 opacity-90 justify-content-md-center mt-10">
        <p> </p>
        <a href="/products/create"
            class="position-absolute top-50 end-3 bg-black text-white py-2 px-5 translate-middle-y">Post Job</a>
    </footer> --}}

    <footer>
        a footer
    </footer>

    <!-- footer -->

    <a href="#" class="arrow"><i><img src="./image/up-arrow.png" alt="" width="50px"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="{{ asset('asset/js/script.js') }}"></script>

</body>

</html>
