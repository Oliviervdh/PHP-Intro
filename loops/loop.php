<?php

$array = [
    ["tv-show" => "Naruto", "rating" => 4],
    ["tv-show" => "Firefly", "rating" => 5],
    ["tv-show" => "Big bang theory", "rating" => 4],
    ["tv-show" => "Family Guy", "rating" => 5],
    ["tv-show" => "The Simpsons", "rating" => 3],
    ["tv-show" => "South Park", "rating" => 3],
    ["tv-show" => "Friends", "rating" => 4],
    ["tv-show" => "Are We There Yet", "rating" => 5]

];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Loops</title>
</head>
<body>
<table>
    <thead>
    <tr><th>Tv-Show</th><th>Star-Rating</i></th></tr>
    </thead>
    <tbody>
    <?php foreach($array as $arr): ?>
        <tr>
            <td><a href="https://www.google.be/search?q=<?php echo $arr['tv-show'];?>"><?php echo $arr["tv-show"];?></a></td>
            <td><?php for($i=1; $i<=$arr["rating"]; $i++){
                echo "<i class='fas fa-star'></i>";
                }
                for($i=5;$i>$arr["rating"];$i--){
                echo "<i class='fas fa-star white'></i>";
                }
                ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
<?php
