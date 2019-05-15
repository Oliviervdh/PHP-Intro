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
    <ul class="nav nav-pills">
        <li class="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { echo "active"; }?>"><a data-toggle="pill" href="#post">POST</a></li>
        <li class="<?php if ($_SERVER['REQUEST_METHOD'] == 'GET') { echo "active"; }?>"><a data-toggle="pill" href="#get">GET</a></li>
    </ul>

    <div class="tab-content">
        <?php if($_SERVER['REQUEST_METHOD'] == 'POST') : ?>
            <div id="post" class="tab-pane fade in active">
                <?php
                echo "Your top 5 shows are: $top_shows";
                echo ", and your top 5 movies are: $top_movies".".";
                ?>
            </div>
        <?php elseif($_SERVER['REQUEST_METHOD'] == 'GET') : ?>
            <div id="get" class="tab-pane fade in active">
                <?php
                echo "Your favorite country is: $fav_country";
                echo ", and your worst ever movie is: $worst_movie".".";
                ?>
            </div>
        <?php endif ?>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
