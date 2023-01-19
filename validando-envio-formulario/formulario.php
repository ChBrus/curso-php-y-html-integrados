<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validando el envío de un formulario</title>
</head>
<body>
    <form action="server.php" method="post">
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name">
        <label for="password">Contraseña:</label>
        <input type="text" name="password" id="password">

        <button name="form" type="submit">Mandar formulario</button>
    </form>
</body>
</html>