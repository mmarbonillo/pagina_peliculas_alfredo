<?php
$movie = $data["movie"][0];
$actors = $data["actor"];
$directors = $data["director"];
echo "<div class='movie'>";
    echo "<img src='images/$movie->cover' alt='cover' height='350px' width='250px'>";
    if($_REQUEST["session"]):
        echo "<input type='button' name='edit' class='editButton' value='EDIT' onclick=\"window.location.href='index.php?opc=openMovie&controller=movieController&id=".$peli->id."'\">";
        echo "<input type='button' name='delete' class='deleteButton' value='DELETE'>";
    endif;
echo "</div>";
echo "<div id='movieInfo'>";
    $i= 1;
    while($i <= $movie->rating):
        echo "<img class='rating' src='images/estrllaamarilla.png' alt='rating' height='20px' width='20px'>";
        $i++;
    endwhile;
    while($i <= 10):
        echo "<img class='rating' src='images/estrellablanca.png' alt='rating' height='20px' width='20px'>";
        $i++;
    endwhile;
    echo "<h3>Tittle</h3>";
    echo "<p class='indentp'>$movie->title</p>";
    echo "<h3>Duration</h3>";
    echo "<p class='indentp'>$movie->duration</p>";
    echo "<h3>Cast</h3>";
    echo "<p class='indentp'>";
    foreach($actors as $actor):
        echo "$actor->name &nbsp&nbsp";
    endforeach;
    echo "</p>";
    echo "<h3>Directors</h3>";
    echo "<p class='indentp'>"; 
    foreach($directors as $director):
        echo "$director->name &nbsp&nbsp";
    endforeach;
    echo "</p>";
    echo "<input type='button' name='viewMovie' class='viewMovie' value='VIEW'>";
echo "</div>";