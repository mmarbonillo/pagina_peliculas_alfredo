<!doctype html>
<html>

<head>
    <title>Titulo</title>
    <meta charset="utf-8">
    <meta name="author" content="Maria Del Mar Fernandez Bonillo">

    <!------------------FONTS--------------------------->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles/style.css">

</head>

<body>
    <div id="todo">
        <div id="header">
            <p><a href="#">MOVIES BONILLO</a></p>
        </div>
        <div id="menus">
            <?php
                /*if(!$data["session"]):
                    echo "<p>Login</p>";
                else:
                    echo "<p><a href=\"#\">Logout</a></p>
                    <img id=\"imagen\" src=\"images/user.png<\" alt=\"usuario\" onclick=\"window.location.href='#'\"/>
                    <p><a href=\"#\">Añadir Película</a></p>";
                endif;*/
            ?>
            <!--<p>Login</p>-->

            <p><a href="#">Logout</a></p>
            <img id="imagen" src="images/user.png" alt="usuario" onclick="window.location.href='#'"/>
            <p><a href="#">Añadir Película</a></p>

            <input type="text" name="search" id="search" placeholder="Search...">
            <input type="button" name="search_button" id="search_button" value="Search" onclick="window.location.href='#'">
        </div>

        <div id="contenido">
            

        