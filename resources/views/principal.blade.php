<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema Biblioteca</title>
</head>
<body>
    <h1>Biblioteca Digital</h1>

    <p>Usuario logeado: {{ session('usuario') }}</p>

    <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da" 
         alt="Biblioteca" 
         width="400">

    <h2>Menú EMPLEADOS</h2>

    <ul>
        <li><a href="/empleados/registrar">Registrar</a></li>
        <li><a href="#">Consulta individual</a></li>
        <li><a href="/empleados/consulta-general">Consulta general</a></li>
        <li><a href="#">Cambiar</a></li>
        <li><a href="#">Eliminar</a></li>
    </ul>

    <a href="/logout">Cerrar sesión</a>
</body>
</html>
