<div id="movies">
<?php
$movies = $data["movies"];
foreach($movies as $peli):
    echo "<div class='movie'>";
    if($_REQUEST["session"]):
        echo "<input type='button' name='edit' class='editButton' value='EDIT' onclick=\"window.location.href='index.php?opc=editMovie&controller=movieController&id=".$peli->id."'\">";
        echo "<input type='button' name='delete' class='deleteButton' value='DELETE'>";
    endif;
    echo "<a href='index.php?opc=openMovie&id=".$peli->id."&controller=movieController'><img class='divmovie' src='images/".$peli->cover."' alt='cover' height='350px' width='250px'></a>";

    $i= 1;
    while($i <= $peli->rating):
        echo "<img class='rating' src='images/estrllaamarilla.png' alt='rating' height='20px' width='20px'>";
        $i++;
    endwhile;
    while($i <= 10):
        echo "<img class='rating' src='images/estrellablanca.png' alt='rating' height='20px' width='20px'>";
        $i++;
    endwhile;
    echo "<p>$peli->year - $peli->title</p>";
    
    echo "</div>";
endforeach;
?>
</div>

