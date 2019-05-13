<?php
$top_shows  = $_POST["Top-shows"];
$top_movies = $_POST["Top-movies"];

$fav_country = $_GET["Favourite-country"];
$worst_movie = $_GET["Worst-movie"];

?>

<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>Results</title>
</head>
<body>

<div class="container">
    <h3>Handling your data</h3>
    <ul class="nav nav-tabs">
        <li class="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { echo "active"; }?>"><a href="#">POST</a></li>
        <li class="<?php if ($_SERVER['REQUEST_METHOD'] == 'GET') { echo "active"; }?>"><a href="#">GET</a></li>
    </ul>

    <div id="output">
        <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo "Your top 5 shows are: $top_shows";
        echo ", and your top 5 movies are: $top_movies".".";
    }
    else if($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo "Your favorite country is: $fav_country";
        echo ", nd your worst ever movie is: $worst_movie".".";
    }
    else{
        return;
    }?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>
