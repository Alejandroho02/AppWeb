<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inside Battle</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

header {
    background-color: #222;
    color: #fff;
    padding: 15px 0;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 50px;
}

.logo h1 {
    margin: 0;
}

.nav-links {
    list-style: none;
    display: flex;
    gap: 20px;
}

.nav-links li a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
}

.hero {
    background: url('images/hero-bg.jpg') no-repeat center center/cover;
    color: #fff;
    text-align: center;
    padding: 100px 20px;
}

.hero .btn {
    background-color: #ff4500;
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
}

.form-container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form label {
    display: block;
    margin: 15px 0 5px;
}

form input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

form button {
    width: 100%;
    padding: 10px;
    background-color: #222;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

</style>

<body>
    <header>
        <nav>
            <div class="logo">
                <h1>Inside Battle</h1>
            </div>
            <ul class="nav-links">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="#about">Acerca del Juego</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="register.html">Registro</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h2>Una Lucha Interna y Física</h2>
        <p>Descubre la historia de Alex, un joven deportista enfrentando una enfermedad crónica. Aprende a vivir con ella y a superar los desafíos internos y externos.</p>
        <a href="register.html" class="btn">Únete a la Batalla</a>
    </section>

    <section id="about" class="about-section">
        <h2>Acerca de Inside Battle</h2>
        <p>Inside Battle es un videojuego que mezcla elementos de lucha y aventura. Acompaña a Alex a través de niveles desafiantes que representan sus luchas internas y físicas, con el objetivo de enseñar sobre aceptación, hábitos saludables y manejo del estrés.</p>
    </section>

    <footer>
        <p>&copy; 2024 Inside Battle. Todos los derechos reservados.</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>
