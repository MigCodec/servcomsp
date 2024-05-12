<html>
<head>
    <title>Lista de Items</title>
</head>
<body>
    <h1>Lista de Items</h1>

    <ul>
        @foreach ($items as $item)
            <li>{{ $item->nombre }}</li> <!-- Suponiendo que 'nombre' es un atributo del modelo Item -->
        @endforeach
    </ul>
</body>
</html>