<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <nav class="container fixed-top">
        <div
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
