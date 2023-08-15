<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="\style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
</head>

<body class="container p-0">
    <nav class="container fixed-top bg-light">
        <div
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-1 border-bottom">

            <div class="col-md-3 text-end">
                <ul class="nav col-12 col-md-auto mb-2 justify-content-start mb-md-0">
                    <li><a href="{{ route('homepage') }}" class="nav-link px-2 link-secondary">Home</a></li>
                </ul>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('about') }}" class="nav-link px-2">Chi sono</a></li>
                <li><a href="{{ route('services') }}" class="nav-link px-2">Servizi</a></li>
                <li><a href="{{ route('contact') }}" class="nav-link px-2">Contatti</a></li>
            </ul>

        </div>
    </nav>
    <main class="p-0" style="margin-top: 70px;">
        <header>
            <div class="bg-dark w-100 d-flex justify-content-center align-items-center">
                <div class="text-light fs-5 px-5" style="margin-top: 150px;">
                    <h1 class="fs-3">
                        Mattia Carcione
                    </h1>
                    <h2 class="fs-4">
                        Web Developer
                    </h2>
                    <p>
                        <a href="https://www.google.com/">
                            <i class="fa-brands fa-instagram" style="color: #f0f2f4;"></i>
                        </a>
                        <a href="https://www.google.com/">
                            <i class="fa-brands fa-discord" style="color: #fafafa;"></i>
                        </a>
                        <a href="https://www.google.com/">
                            <i class="fa-brands fa-skype" style="color: #fafafa;"></i>
                        </a>
                        <a href="https://www.google.com/">
                            <i class="fa-solid fa-envelope" style="color: #fafafa;"></i>
                        </a>
                    </p>
                    <button type="button" class="btn btn-outline-light fs-6" style="height: 10%">Inizia</button>
                </div>
                <div class="px-5">
                    <img src="/_sfondoProgetto.jpg" alt="" class="my-5 border-custom img-fluid">
                </div>

            </div>
        </header>
        <footer>

        </footer>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
