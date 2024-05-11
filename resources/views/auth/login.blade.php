<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
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

        .login-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 90%;
            max-width: 350px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-container label {
            display: block;
            margin-bottom: 8px;
        }

        .login-container input[type="email"],
        .login-container input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login-container input[type="checkbox"] {
            margin-right: 5px;
        }

        .login-container button[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-container button[type="submit"]:hover {
            background-color: #0056b3;
        }

        @media only screen and (max-width: 600px) {
            .login-container {
                width: 90%;
                max-width: none;
            }
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Iniciar sesión</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required autofocus>
        </div>

        <div>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div>
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Recuérdame</label>
        </div>

        <div>
            <button type="submit">Iniciar sesión</button>
        </div>
        @if(session('failed'))
        <div>
            {{session('failed')}}
        </div>
        @endif
    </form>
</div>

</body>
</html>