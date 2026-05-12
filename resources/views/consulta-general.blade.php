<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consulta general de empleados</title>
</head>
<body>
    <h1>Consulta general de empleados</h1>

    <table border="1" cellpadding="8">
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Sexo</th>
            <th>Fecha de nacimiento</th>
            <th>Turno</th>
        </tr>

        @foreach($empleados as $empleado)
            <tr>
                <td>{{ $empleado->codigo }}</td>
                <td>{{ $empleado->nombre }}</td>
                <td>{{ $empleado->direccion }}</td>
                <td>{{ $empleado->telefono }}</td>
                <td>{{ $empleado->sexo }}</td>
                <td>{{ $empleado->fecha_nac }}</td>
                <td>{{ $empleado->turno }}</td>
            </tr>
        @endforeach
    </table>

    <br>

    <a href="/principal">Volver al menú principal</a>
</body>
</html>