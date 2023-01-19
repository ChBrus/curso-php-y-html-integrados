<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de input</title>
</head>
<body>
    <form action='server.php' method='post' enctype='multipart/form-data'>
    
        <!-- Input simple -->
        <!-- 
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        -->

        <!-- Arreglos -->
        <!--
        <label>Personas:</label>
        <input type="text" name="personas[]">
        <input type="text" name="personas[]">
        <input type="text" name="personas[]">
        -->

        <!-- Arreglos asociativos -->
        <!--
        <label>Nombre:</label>
        <input type="text" name="persona[nombre]">
        <label>Email:</label>
        <input type="email" name="persona[email]">
        <label>Edad:</label>
        <input type="number" name="persona[edad]">
        -->

        <!-- Checkbox -->
        <!--
        <input type="checkbox" name="list1" value="México">
        <input type="checkbox" name="list2" value="EUA">
        <input type="checkbox" name="list3" value="Canáda">
        -->

        <!-- Radios -->
        <!--
        <label for="mx">México</label>
        <input type="radio" name="pais" value="México" id="mx">
        <label for="cm">Colombia</label>
        <input type="radio" name="pais" value="Colombia" id="cm">
        <label for="pu">Perú</label>
        <input type="radio" name="pais" value="Perú" id="pu">
        -->

        <!-- Múltiples archivos -->
        
        <label for="galeria">Carga tus imágenes:</label>
        <input type="file" multiple name="galeria[]" id="galeria">

        <button type="submit">Mandar formulario</button>
    </form>
</body>
</html>