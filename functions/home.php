<?php
session_start();
require 'security.php';
include 'functions.php';

if(isset($_POST["nickname"])){
    echo "<pre>";
    print_r(nickname_generate($_POST["nickname"]));
    echo "</pre>";
    unset($_POST["nickname"]);
}


if(isset($_POST["generate"])){

    object_generate();

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Home</title>
</head>
<body>

<div class="container">
<div class="box1">
    <form method="post">
    <button type="submit" name="generate" class="w3-button btn w3-indigo w3-round-xxlarge">Generate object!</button>
    </form>

</div>


<div class="box2">
    <form method="post">
    <button type="submit" name="revert" class="w3-button btn w3-indigo w3-round-xxlarge">Revert object!</button>
    </form>
</div>


<div class="box3">
    <form method="post">
    <input class="input" name="nickname" type="text">
        <button type="submit" name="submit" class="w3-button btn w3-indigo w3-round-xxlarge">Get a nickname!</button>
    </form>

   </div>


</div>
</body>
</html>