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

    <div class="container px-4 py-5" style="
    margin-top: 75px;">
        <h2 class="pb-2 border-bottom">Servizi offerti</h2>

        <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">

            <div class="col d-flex flex-column align-items-start gap-2">
                <h2 class="fw-bold text-body-emphasis">Left-aligned title explaining these awesome features</h2>
                <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading. We'll add
                    onto it with another sentence and probably just keep going until we run out of words.</p>
                <a href="#" class="btn btn-primary btn-lg">Primary button</a>
            </div>

            <div class="col">
                <div class="row row-cols-1 row-cols-sm-2 g-4">
                    @foreach ($services as $service)
                        <div class="col d-flex flex-column gap-2">

                            <div
                                class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                                {{ $service }}
                            </div>

                            <h4 class="fw-semibold mb-0 text-body-emphasis"></h4>
                            
                            <p class="text-body-secondary">
                            </p>

                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
