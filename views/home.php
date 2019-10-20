<div id="movies">
<?php
include("models/movie.php");
$m = new Movie();
$movies = $m->getAllMovies();
foreach($movies as $peli):
    echo "<div id='movie'>";
    echo "<img src='images/".$peli->cover."' alt='cover' height='350px' width='250px'>";

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

