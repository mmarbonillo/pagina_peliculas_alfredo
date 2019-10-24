<script>
window.history.replaceState({},'','index.php');
</script>
<?php
$movie = $data["movie"][0];
$actors = $data["actor"];
$directors = $data["director"];
if(isset($data["noact"])):
    $peopleNoAct = $data["noact"];
endif;
if(isset($data["nodirect"])):
    $peopleNodirect = $data["nodirect"];
endif;
if(isset($data["display"])):
    $display = $data["display"];
else:
    $display = "none";
endif;
echo "<div class='movie'>";
    echo "<img src='images/$movie->cover' alt='cover' height='350px' width='250px'>";
    echo "<input type='button' name='delete' class='movieDeleteButton' value='DELETE'>";
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
    echo "<p class='indentp' name='title' onClick='editarTitulo(this)'>$movie->title</p>";
    echo "<input onFocusout='guardarTitulo(this)' type='text' class='indentp' name='title' style='display:none' value='".$movie->title."'>";
    echo "<h3>Duration</h3>";
    echo "<p class='indentp' name='duration' onClick='editarDuracion(this)'>$movie->duration</p>";
    echo "<input onFocusout='guardarDuracion(this)' type='text' class='indentp' name='duration' style='display:none' value='".$movie->duration."'>";
    echo "<h3>Cast</h3>";
    echo "<p onclick='addActor()' class='indentp'>";
    foreach($actors as $actor):
        echo "$actor->name &nbsp&nbsp";
    endforeach;
    echo "</p>";
    echo "<h3>Directors</h3>";
    echo "<p onclick='addDirector()' class='indentp'>"; 
    foreach($directors as $director):
        echo "$director->name &nbsp&nbsp";
    endforeach;
    echo "</p>";
    echo "<input type='button' name='editMovie' class='movieEditButton' value='SAVE'>";
echo "</div>";

echo "<div id='addActorDirector'>";
    echo "<div class='capaAdd' style='display:".$display."'>";
        echo "<img class='closeIcon' src='images/close.png' alt='close'>";
        foreach($peopleNoAct as $actor):
            echo "<p class='unselectionable' ondblclick=\"window.location.href='index.php?opc=addActorMovie&controller=movieController&movie=".$movie->id."&people=".$actor->id."'\">".$actor->name."</p>";
        endforeach;
    echo "</div>";
    echo "<div class='capaAdd' style='display:".$display."'>";
        echo "<img class='closeIcon' src='images/close.png' alt='close'>";
        foreach($peopleNodirect as $director):
            echo "<p class='unselectionable' ondblclick=\"window.location.href='index.php?opc=addDirectorMovie&controller=movieController&movie=".$movie->id."&people=".$director->id."'\">".$director->name."</p>";
        endforeach;
    echo "</div>";
echo "</div>";
