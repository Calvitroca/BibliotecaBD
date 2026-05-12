<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar empleado</title>
</head>
<body>
    <h1>Registrar empleado</h1>

    <form method="POST" action="/empleados/registrar">
        @csrf

        <label>Código:</label>
        <input type="number" name="codigo" required>

        <br><br>

        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <br><br>

        <label>Dirección:</label>
        <input type="text" name="direccion">

        <br><br>

        <label>Teléfono:</label>
        <input type="text" name="telefono">

        <br><br>

        <label>Sexo:</label>
        <input type="text" name="sexo" maxlength="1">

        <br><br>

        <label>Fecha de nacimiento:</label>
        <input type="date" name="fecha_nac">

        <br><br>

        <label>Turno:</label>
        <input type="text" name="turno">

        <br><br>

        <button type="submit">Guardar empleado</button>
    </form>

    <br>

    <a href="/principal">Volver al menú principal</a>
</body>
</html>
