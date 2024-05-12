<html>
<head>
    <title>Agregar Mantenimiento</title>
    <!-- Estilos CSS (opcional) -->
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
        .container {
            position: relative;
            width: 400px;
            text-align: center;
        }
        h1 {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            margin: 20px auto; /* Ajuste el valor según sea necesario */
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="date"], textarea, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="date"]::-webkit-inner-spin-button,
        input[type="date"]::-webkit-calendar-picker-indicator {
            display: none;
            -webkit-appearance: none;
        }
        input[type="date"] {
            appearance: none;
            -moz-appearance: textfield;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    @include('layouts.app')
<h1>Agregar Mantenimiento</h1>

<form action="{{ route('maintenance/add') }}" method="POST">
    @csrf

    <label for="patente">Patente del Vehículo:</label>
    <select name="patente" id="patente">
        @foreach ($cars as $car)
            <option value="{{ $car->patent }}">{{ $car->patent }}</option>
        @endforeach
    </select>

    <label for="kilometraje_actual">Kilometraje Actual:</label>
    <input type="text" id="kilometraje_actual" name="kilometraje_actual" required>

    <label for="kilometraje_proximo">Kilometraje para el Próximo Mantenimiento:</label>
    <input type="text" id="kilometraje_proximo" name="kilometraje_proximo" required>

    <label for="fecha_realizado">Fecha del Mantenimiento:</label>
    <input type="date" id="fecha_realizado" name="fecha_realizado" placeholder="YYYY-MM-DD" required>

    <label for="comentarios">Comentarios Adicionales:</label>
    <textarea id="comentarios" name="comentarios"></textarea>

    <input type="submit" value="Guardar Mantenimiento">
</form>

</body>
</html>