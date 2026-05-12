<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consulta general de alumnos</title>
</head>
<body>
    <h1>Consulta general de alumnos</h1>

    <table border="1" cellpadding="8">
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Carrera</th>
            <th>Correo</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Sexo</th>
            <th>Fecha de nacimiento</th>
        </tr>

        @foreach($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->codigo }}</td>
                <td>{{ $alumno->nombre }}</td>
                <td>{{ $alumno->carrera }}</td>
                <td>{{ $alumno->correo }}</td>
                <td>{{ $alumno->direccion }}</td>
                <td>{{ $alumno->telefono }}</td>
                <td>{{ $alumno->sexo }}</td>
                <td>{{ $alumno->fecha_nac }}</td>
            </tr>
        @endforeach
    </table>

    <br>

    <a href="/principal">Volver al menú principal</a>
</body>
</html>