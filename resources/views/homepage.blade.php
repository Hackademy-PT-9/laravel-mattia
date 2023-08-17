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

<body class="container p-0 bg-light">
    <nav class="container position-fixed bg-light" id="navbar">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-1">

            <div class="col-md-3 text-end">
                <ul class="dCustom nav col-12 col-md-auto mb-2 justify-content-start mb-md-0">
                    <li class="border border-dark rounded"><a href="{{ route('homepage') }}" class="nav-link px-2 text-black">Home</a></li>
                </ul>
            </div>

            <ul class="dCustom nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li class="border border-dark rounded mx-1"><a href="{{ route('about') }}" class="nav-link text-black">Chi sono</a></li>
                <li class="border border-dark rounded mx-1"><a href="{{ route('services') }}" class="nav-link text-black">Servizi</a></li>
                <li class="border border-dark rounded mx-1"><a href="{{ route('contact') }}" class="nav-link text-black">Contattami</a></li>
            </ul>
        </div>
    </nav>

    <main class="p-0">
        <header class="d-flex align-items-center">
            <div class="w-100 d-flex justify-content-evenly align-items-center borderCustom">
                <div class="text-light fs-5 px-5" style="margin-top: 150px;">
                    <h1 class="fs-3 fw-bolder" style="color: #333333 !important;">
                        Mattia Carcione
                    </h1>
                    <h2 class="fs-4 fw-bolder" style="color: #333333 !important;">
                        Web Developer
                    </h2>
                    <p>
                        <a href="https://www.google.com/">
                            <i class="fa-brands fa-instagram fw-bolder"
                                style="color: #333333 !important;"></i>
                        </a>
                        <a href="https://www.google.com/">
                            <i class="fa-brands fa-discord fw-bolder" style="color: #333333 !important;"></i>
                        </a>
                        <a href="https://www.google.com/">
                            <i class="fa-brands fa-skype fw-bolder" style="color: #333333 !important;"></i>
                        </a>
                        <a href="https://www.google.com/">
                            <i class="fa-solid fa-envelope fw-bolder" style="color: #333333 !important;"></i>
                        </a>
                    </p>
                </div>

                <div class="px-5 d-none d-md-block">
                    <img src="/_sfondoProgetto.jpg" alt="" class="my-5 border-custom img-fluid">
                </div>
            </div>
        </header>

        <section
            class="d-flex justify-content-around flex-wrap align-items-center border-top border-light">
            <div class="py-5 container d-flex justify-content-center align-items-center flex-wrap"
                style="height: 100vh; margin: 0 20%;">
                <div id="myDiv" class="hiddenDiv">
                    <h1 class="mb-3 text-light text-align-center">
                        Trasforma la tua visione <br> in un'esperienza online <span>straordinaria</span>.
                    </h1>

                    <p class="fs-4 mt-3 text-light text-center">
                        Affidati ad un web developer
                        per creare siti e eCommerce su misura
                        per aziende e freelance,
                        portando la tua presenza online
                        a nuovi livelli di successo.
                    </p>
                </div>
            </div>

            <div class="container d-flex justify-content-center align-items-center sectionCustom"
                style="padding-top: 150px">
                <div>
                    <h1 class="fs-3 mb-5 text-light">
                        Eleva la tua azienda al mondo digitale con <span>siti web</span> su
                        misura.
                    </h1>
                    <a href=""><button type="button" class="btn btn-outline-light mt-3">Scopri di
                            più</button></a>
                </div>
                <div class="ms-5 d-none d-md-block" style="max-width: 45%;">
                    <img class="img-hidden img-fluid border border-white rounded"
                        src="https://doweb.srl/download/decv/2143/come-funziona-sito-web.jpg?20200406155635">
                </div>
            </div>

            <div class="container d-flex justify-content-center align-items-center sectionCustom"
                style="padding-top: 150px">
                <div class="me-5 d-none d-md-block" style="max-width: 45%;">
                    <img class="img-hidden1 img-fluid border border-white rounded"
                        src="https://imgcdn.agendadigitale.eu/wp-content/uploads/2020/04/17090447/e-commerce.jpg">
                </div>
                <div style="text-align: right;">
                    <h1 class="fs-3 text-light">
                        Trasforma le tue passioni in profitti online, realizzando il tuo <span>eCommerce</span>.
                    </h1>
                    <button type="button" class="btn btn-outline-light mt-3">Scopri di più</button>
                </div>
            </div>

            <div id="yourDiv" class="container d-flex justify-content-center align-items-center sectionCustom"
                style="margin-top: 200px">
                <div style="text-align: center;">
                    <h1 style="color: white;" class="fs-3 hidden">
                        Espandi i confini del tuo <span style="color: #9300ff;">Business</span>. <br>
                        Vieni ad esplorare tutti i servizi.
                    </h1>
                    <button type="button" class="btn btn-outline-light mt-3 hidden">Scopri di più</button>
                </div>
            </div>
        </section>
    </main>

    <footer class="contact-footer border-top border-light">
        <div class="container">
            /*fare una lista con servizi e iterare i servizi e rotte e about con my story e careers e poi contatti*/
            <div class="contact-info container">
                <h2>Contatti</h2>
                <p>Indirizzo: Via Example, 12345, Città</p>
                <p>Email: info@example.com</p>
                <p>Telefono: +123 456 7890</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="\script.js"></script>
</body>

</html>
