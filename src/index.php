<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - ODIOPHP</title>
</head>

<body>
    <style>
        body,
        html {
            background-color: #272727;
            color: #fff;
        }

        form {
            margin-bottom: 20px;
        }

        h2 {
            margin-top: 20px;
        }

        p {
            color: #fff;
        }

        input[type="text"] {
            margin-right: 10px;
        }

        input[type="submit"] {
            margin-top: 10px;
        }
    </style>

    <h2>Crear nuevo usuario</h2>

    <form action="create.php" method="post">
        <input type="text" name="name" placeholder="Name">
        <input type="password" name="password" placeholder="Password">
        <select name="roles" id="role">
            <?php
            require ("./services/genres.php");
            ?>
        </select>
        <select name="genres" id="genre">
            <?php
            require ("./services/roles.php");
            ?>
        </select>
        <input type="submit" value="Guardar">
    </form>
</body>

</html>