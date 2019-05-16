<?php
$top_shows = $_POST["Top-shows"];
$top_movies = $_POST["Top-movies"];


$fav_country = $_GET["Favourite-country"];
$worst_movie = $_GET["Worst-movie"];

//$movies = $_POST['movie'];
//foreach($movies as $movie){
//    echo $movie . "<br />";
//}


?>

<!doctype html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 50%;
            margin-top: 25px;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            width: 50%;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
            width: 50%;
        }
    </style>
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
                <table>
                    <tr>
                        <th>Your top 5 shows:</th>
                        <th></th>
                    </tr>
                <?php
                foreach($top_shows as $key => $top_show){
                    echo "<tr><td>$key</td><td>$top_show</td></tr>\n";
                }
                ?>
                </table>
                <br>
                <table>
                    <tr>
                        <th>Your top 5 movies:</th>
                        <th></th>
                    </tr>
                    <?php
                foreach($top_movies as $key => $top_movie){
                    echo "<tr><td>$key</td><td>$top_movie</td></tr>\n";
                }
                ?>
                </table>
            </div>
        <?php elseif($_SERVER['REQUEST_METHOD'] == 'GET') : ?>
            <div id="get" class="tab-pane fade in active">
                <table>
                    <tr>
                        <th>Your favorite country</th>
                    </tr>
                <?php
                echo "<tr><td>$fav_country</td></tr>\n";
                ?>
                </table>
                <br>
                <table>
                    <tr>
                        <th>Your worst ever movie</th>
                    </tr>
                    <?php
                    echo "<tr><td>$worst_movie</td></tr>\n";
                ?>
                </table>
            </div>
        <?php endif ?>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
