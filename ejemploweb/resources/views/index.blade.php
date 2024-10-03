<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inside Battle</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <h1>Inside Battle</h1>
            </div>
            <ul class="nav-links">
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="#about">Acerca del Juego</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Registro</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h2>Una Lucha Interna y Física</h2>
        <p>Descubre la historia de Alex, un joven deportista enfrentando una enfermedad crónica. Aprende a vivir con ella y a superar los desafíos internos y externos.</p>
        <a href="{{ route('register') }}" class="btn">Únete a la Batalla</a>
    </section>

    <section id="about" class="about-section">
        <h2>Acerca de Inside Battle</h2>
        <p>Inside Battle es un videojuego que mezcla elementos de lucha y aventura. Acompaña a Alex a través de niveles desafiantes que representan sus luchas internas y físicas, con el objetivo de enseñar sobre aceptación, hábitos saludables y manejo del estrés.</p>
    </section>

    <footer>
        <p>&copy; 2024 Inside Battle. Todos los derechos reservados.</p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
