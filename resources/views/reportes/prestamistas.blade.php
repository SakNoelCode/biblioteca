<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Prestamistas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .table-container {
            margin: 20px auto;
            width: 80%;
        }

        .prestamistas-table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
        }

        .prestamistas-table th,
        .prestamistas-table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        .prestamistas-table th {
            background-color: #f2f2f2;
        }

        .prestamistas-table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .prestamistas-table tbody tr:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Reporte de Prestamistas</h1>
    </div>

    <div class="table-container">
        <table class="prestamistas-table">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Código</th>
                    <th>Nombres y Apellidos</th>
                    <th>Tipo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prestamistas as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->codigo}}</td>
                    <td>{{$item->razon_social}}</td>
                    <td>{{ucfirst($item->tipo)}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>