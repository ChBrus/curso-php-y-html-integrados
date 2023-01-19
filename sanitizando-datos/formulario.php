<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitizando datos</title>
</head>
<body>
    <form action="server.php" method="post">
        <label for="name">Nombre:</label>
        <input type="text" name="nombre" id="name">
        
        <label for="user_name">Nombre de usuario:</label>
        <input type="text" name="user_name" id="user_name"> 

        <label for="email">Email:</label>
        <input type="text" name="email" id="email">

        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password">    

        <button type="submit">Mandar formulario</button>
    </form>
</body>
</html>