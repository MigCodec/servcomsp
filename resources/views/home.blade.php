<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .user-info-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 90%;
            max-width: 600px;
        }

        .user-info-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .user-info {
            margin-bottom: 10px;
        }

        .user-info label {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="user-info-container">
    <h2>Bienvenido</h2>

    <div class="user-info">
        <label for="name">Nombre:</label>
        <span id="name">{{ auth()->user()->name }}</span>
    </div>

    <div class="user-info">
        <label for="email">Correo electrónico:</label>
        <span id="email">{{ auth()->user()->email }}</span>
    </div>

    <!-- Agrega más campos de información del usuario según tu modelo de datos -->

    <div>
        <a href="{{ route('logout') }}">Cerrar sesión</a>
    </div>
</div>

</body>
</html>