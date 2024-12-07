<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Perfumes - Iniciar Sesión</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <img src="img/logo.png" alt="Logo de la tienda">
        </div>
        <h1>Bienvenido a Tienda de Perfumes</h1>
        <form action="login.php" method="post" class="login-form">
            <label for="nick">Usuario:</label>
            <input type="text" id="nick" name="nick" placeholder="Ingresa tu usuario" required>
            
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
            
            <button type="submit">Entrar</button>
        </form>
        <a href="registro.php" class="register-link">Registrarse</a>
    </div>
</body>
</html>
