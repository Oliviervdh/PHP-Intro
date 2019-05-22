<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Lottery</title>
</head>
<body>

<div class="result-wrapper">
    <div class="row">
        <div class="col-lg-6 m-auto">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pickedFood = $_POST ['fast-food'];
    $foods = [
        'pizza',
        'fries',
        'burger'
    ];
    $winner = array_rand($foods,1);
    if ($pickedFood == $foods[$winner]){
        switch ($pickedFood){
            case 'pizza':
                echo "<h1 class='lottery-h1'>You win a $pickedFood !</h1>";
                echo '<br><img src="win.png" height="300" width="300" alt="">';
                echo '<img src="pizza.png" alt="">';
                break;
            case 'fries':
                echo "<h1 class='lottery-h1'>You win a bowl of $pickedFood !</h1>";
                echo '<br><img src="win.png"  height="300" width="300" alt="">';
                echo '<img src="fries.png" alt="">';
                break;
            case 'burger':
                echo "<h1 class='lottery-h1'>You win a $pickedFood !</h1>";
                echo '<br><img src="win.png"  height="300" width="300" alt="">';
                echo '<img src="burger.png" alt="">';
                break;
            default:
                echo "You haven't chosen a cheat meal";
                return;
        };
    } else {
        echo "<h1>Hmmm...no $pickedFood for you today...</h1>";
        echo '<br><img src="losing.png" alt="">';
    };
};
?>
<a href="index.php">Try again?</a>
</div>
</div>


</body>
</html>