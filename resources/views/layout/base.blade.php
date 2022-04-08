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
    <style>
        *
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body
{
    font-family: 'Ubuntu', sans-serif;
}

.zoom-it {
    transition: .5s transform;
}

.zoom-it:hover {
    transform: scale(1.0);
}

.bg-gray-100
{
    background-color: rgba(10, 20, 30, 0.1);
}

.bg-gray-200
{
    background-color: rgba(10, 20, 30, 0.2);
}

.bg-gray-300
{
    background-color: rgba(10, 20, 30, 0.3);
}

.bg-gray-400
{
    background-color: rgba(10, 20, 30, 0.4);
}

.bg-gray-500
{
    background-color: rgba(10, 20, 30, 0.5);
}

.bg-gray-600
{
    background-color: rgba(10, 20, 30, 0.6);
}

.bg-gray-700
{
    background-color: rgba(10, 20, 30, 0.7);
}

.bg-gray-800
{
    background-color: rgba(10, 20, 30, 0.8);
}

.bg-gray-900
{
    background-color: rgba(10, 20, 30, 0.9);
}

.bg-gray-full
{
    background-color: rgba(10, 20, 30, 1);
}

.text-gray-100
{
    color: rgb(10, 20, 30);
}
.text-gray-200
{
    color: rgb(30, 40, 50);
}
.text-gray-300
{
    color: rgb(50, 60, 70);
}
.text-gray-400
{
    color: rgba(70, 80, 90);
}
.text-gray-500
{
    color: rgba(90, 100, 110);
}
.text-gray-600
{
    color: rgb(110, 120, 130);
}
.text-gray-700
{
    color: rgb(130, 140, 150);
}
.text-gray-800
{
    color: rgb(150, 160, 170);
}
.text-gray-900
{
    color: rgb(200, 200, 200);
}
.text-gray-full
{
    color: rgb(255, 255, 255);
}

.bg-wine
{
    background-color: #800f2f;
}

.bg-wine-footer
{
    background-color: #5c061e;
}

    </style>
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
                <a
                    class="btn btn-outline-light btn-floating m-1"
                    target="__blank"
                    href="https://www.facebook.com/profile.php?id=100079499606660"
                    role="button">
                        <i class="fab fa-facebook-f"></i>
                </a>

                <!-- WhatsApp -->
                <a class="btn btn-outline-light btn-floating m-1" role="button" href="https://twitter.com/AlconviasBo">
                    <i class="fab fa-twitter"></i>
                </a>

                <!-- WhatsApp -->
                <a class="btn btn-outline-light btn-floating m-1" role="button" href="https://www.instagram.com/alconviasbo/">
                    <i class="fab fa-instagram"></i>
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
