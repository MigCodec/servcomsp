<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        /* Estilos del navbar */
        .navbar {
            background-color: #333;
            color: #fff;
            padding: 10px;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            font-size: 1.5em;
            text-decoration: none;
            color: #fff;
            margin-right: 20px;
        }

        .navbar-nav {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: row;
        }

        .nav-item {
            margin-left: 10px;
            position: relative;
        }

        .nav-item a {
            text-decoration: none;
            color: #fff;
            display: block;
            padding: 10px 15px;
        }

        .nav-item:hover {
            background-color: #555;
        }

        /* Estilos para los submenús */
        .submenu {
            display: none;
            position: absolute;
            background-color: #333;
            padding: 10px;
            z-index: 1001;
            top: 100%;
            left: 0;
        }

        .nav-item:hover .submenu {
            display: block;
        }

        .submenu a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 8px 0;
        }

        /* Estilos para el menú desplegable en dispositivos móviles */
        .menu-toggle {
            display: none;
            cursor: pointer;
        }

        @media only screen and (max-width: 768px) {
            .navbar-nav {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 50px;
                left: 0;
                background-color: #333;
                width: 100%;
            }

            .menu-toggle {
                display: block;
            }

            .menu-toggle:hover {
                background-color: #555;
            }

            .navbar.active .navbar-nav {
                display: flex;
            }
        }
    </style>
</head>
<body>

<div class="navbar">
    <div class="navbar-brand">
        <a href="{{ route('home') }}">Mi Aplicación</a>
    </div>
    <div class="menu-toggle">&#9776;</div>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="#">Inicio</a>
        </li>
        <li class="nav-item">
            <a href="#">Mantenimientos</a>
            <ul class="submenu">
                <li><a href="#">Agregar</a></li>
            </ul>
        </li>
        @if (Auth::check())
            <li class="nav-item"><a href="{{ route('logout') }}">Cerrar sesión</a></li>
        @else
            <li class="nav-item"><a href="{{ route('login') }}">Iniciar sesión</a></li>
        @endif
    </ul>
</div>

<div class="content">
    @yield('content')
</div>

<script>
    document.querySelector('.menu-toggle').addEventListener('click', function() {
        document.querySelector('.navbar').classList.toggle('active');
    });
</script>

</body>
</html>