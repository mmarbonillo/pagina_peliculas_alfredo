<?php
$movie = $data["movie"][0];
$actors = $data["actor"];
$directors = $data["director"];
echo "<div class='movie'>";
    echo "<img src='images/$movie->cover' alt='cover' height='350px' width='250px'>";
echo "</div>";
echo "<div id='movieInfo'>";
    echo "<div class='campoMovie'>";
        echo "<h3>Tittle</h3>";
        echo "<p class='indentp'>$movie->title</p>";
        //BOTONES
        echo "<input type='button' name='edit' class='movieEditButton' value='EDIT' onclick=\"window.location.href='index.php?opc=editMovie&controller=movieController&id=".$peli->id."'\">";
        //FIN BOTONES
    echo "</div>";
    echo "<div class='campoMovie'>";
        echo "<h3>Year</h3>";
        echo "<p class='indentp'>$movie->year</p>";
        //BOTONES
        echo "<input type='button' name='edit' class='movieEditButton' value='EDIT' onclick=\"window.location.href='index.php?opc=editMovie&controller=movieController&id=".$peli->id."'\">";
        //FIN BOTONES
    echo "</div>";
    echo "<div class='campoMovie'>";
        echo "<h3>Cast</h3>";
        foreach($actors as $actor):
            echo "<p class='indentp'>";
            echo "$actor->name";
            echo "</p>";
        endforeach;
        //BOTONES
        echo "<input type='button' name='edit' class='movieEditButton' value='EDIT' onclick=\"window.location.href='index.php?opc=editMovie&controller=movieController&id=".$peli->id."'\">";
        //FIN BOTONES
    echo "</div>";
    echo "<div class='campoMovie'>";
        echo "<h3>Directors</h3>";
        foreach($directors as $director):
            echo "<p class='indentp'>"; 
            echo "$director->name &nbsp&nbsp";
            echo "</p>";
        endforeach;
        //BOTONES
        echo "<input type='button' name='edit' class='movieEditButton' value='EDIT' onclick=\"window.location.href='index.php?opc=editMovie&controller=movieController&id=".$peli->id."'\">";
        //FIN BOTONES
    echo "</div";
echo "</div>";