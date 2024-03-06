<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Revistas</title>
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
        <h1>Reporte de Ejemplares Revistas</h1>
    </div>

    <div class="table-container">
        <table class="prestamistas-table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Fecha de publicación</th>
                    <th>N° Páginas</th>
                    <th>Pais/Ciudad</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registros as $item)
                <tr>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->fecha_publicacion}}</td>
                    <td>{{$item->numero_paginas}}</td>
                    <td>{{$item->pais_ciudad}}</td>
                    <td>{{$item->cantidad}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>