<html>
<head>
    <title>Ver Mantenimientos</title>
    <!-- Estilos CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f2f2f2;
        }
        .actions {
            white-space: nowrap;
        }
        .actions a {
            margin-right: 5px;
            text-decoration: none;
            color: #007bff;
        }
        .actions a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    @include('layouts.app')
<h1>Ver Mantenimientos</h1>

<table>
    <thead>
        <tr>
            <th>Patente</th>
            <th>Fecha</th>
            <th>Kilometraje</th>
            <th>Proximo Kilometraje</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($maintenances as $maintenance)
            <tr>
                <td>{{ $maintenance->patent }}</td>
                <td>{{ $maintenance->date_of_maintenance }}</td>
                <td>{{ $maintenance->mileage }}</td>
                <td>{{ $maintenance->additional_comment }}</td>
                <td class="actions">
                    <a href="{{ route('maintenance/show', ['id' => $maintenance->id]) }}">Ver Detalle</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>