<?php
$top_shows  = $_POST["Top-shows"];
$top_movies = $_POST["Top-movies"];

$fav_country = $_GET["Favourite-country"];
$worst_movie = $_GET["Worst-movie"];



?>

<!doctype html>
<html>

<head>
    <title>Document</title>
</head>
<body>
<h2>Handling your POST data</h2>
<?php echo "Your top 5 TV shows are: ", $top_shows ?>;
<br>
<?php echo "Your top 5 movies are: ", $top_movies ?>;



<h2>Handling your GET data</h2>
<?php echo 'Your favorite country is: ', $fav_country ?>;
<br>
<?php echo 'Worst movie ever seen: ', $worst_movie ?>;


</body>
</html>
