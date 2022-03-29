<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <title>@yield('title', config('app.name'))</title>
    <link rel="stylesheet" href="{{ secure_asset('css/custom.css') }}">
    @yield('styles')
</head>

<body class="bg-gray-200">
    @include('layout.navigation.navbar')
    <div>
        @yield('content')
    </div>
    @yield('scripts')
    <!-- FOOTER -->
    <!-- Footer -->
    <footer class="bg-wine-footer   text-center text-white">
        <!-- Grid container -->
        <div class="p-4">
            <!-- Section: Social media -->
            <section class="mb-4 d-flex items-center justify-content-center">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" target="__blank" href="https://www.facebook.com/profile.php?id=100079499606660" role="button">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <!-- WhatsApp -->
                <a class="btn btn-outline-light btn-floating m-1" role="button">
                    <i class="fas fa-phone-volume"></i> 76597147 (Lic. Durán)
                </a>

                <!-- WhatsApp -->
                <a class="btn btn-outline-light btn-floating m-1" role="button">
                    <i class="fas fa-phone-volume"></i> 69951459 (Ing. Alanoca)
                </a>

            </section>
            <!-- Section: Social media -->

            <!-- Section: Text -->
            <section class="mb-4">
                <p class="text-light text-center">
                    <i>~Alconvias Creando el Ambiente que Sueñas, Nuestra Pasión es Construir Vías del Futuro.</i>
                </p>
            </section>
            <!-- Section: Text -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright: <a class="text-white" href="/">alconvias.com.bo</a> <br> <a class="text-white far fa-envelope" href="mailto:alconvias.bolivia@gmail.com"></a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
