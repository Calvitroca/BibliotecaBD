<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login Biblioteca</title>
</head>
<body>
    <h1>Inicio de sesión - Biblioteca</h1>

    @if(session('error'))
        <p style="color:red;">{{ session('error') }}</p>
    @endif

    <form method="POST" action="/login">
        @csrf

        <label>Nombre de usuario:</label>
        <input type="text" name="nombre_del_usuario" required>

        <br><br>

        <label>Contraseña:</label>
        <input type="password" name="contraseña" required>

        <br><br>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>
