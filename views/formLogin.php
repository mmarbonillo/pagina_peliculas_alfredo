<!doctype html>
<html>

<head>
    <title>Titulo</title>
    <meta charset="utf-8">
    <meta name="author" content="Maria Del Mar Fernandez Bonillo">

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div id="todo">
        <div id="formularios">
            <div id="formulariologin">
                <form action="index.php?controller=userController" method="POST">
                    <div class="opcion">
                        <div class="etiqueta">
                            <label for="username">Usuario: </label>
                        </div>
                        <div class="campo">
                            <input type="text" name="username" />
                        </div>
                    </div>
                    <div class="opcion">
                        <div class="etiqueta">
                            <label for="passwd">Contraseña: </label>
                        </div>
                        <div class="campo">
                            <input type="password" name="passwd" />
                        </div>
                    </div>
                    <br>
                    <?php
                    if ($data["mensaje"] != null) {
                        echo "<div style='color:red'>".$data["mensaje"]."</div>";
                    }
                    ?>
                    <br>
                    <input type="submit" name="comprobar" value="Comprobar" />
                    <input type="hidden" name="opc" value='processLogin'>
                </form>
            </div>
        </div>
    </div>
</body>