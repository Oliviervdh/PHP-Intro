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
    <title>Document</title>
</head>
<body>
<div class="title-wrapper">
    <h1>Food Lottery - Select your favorite food.</h1>
</div>
<div class="food-wrapper">
    <form action="lottery.php" method="post">
        <label for="pizza">
            <input type="radio" name="fast-food" value="pizza" id="pizza">
            <img src="pizza.png" alt="">
        </label>
        <label for="fries">
            <input type="radio" checked="checked" name="fast-food" value="fries" id="fries">
            <img src="fries.png" alt="">
        </label>
        <label for="burger">
            <input type="radio" name="fast-food" value="burger" id="burger">
            <img src="burger.png" alt="">
        </label>
        <input type="submit" class="btn">
    </form>
</div>

<div class="footer-wrapper">
    <h2>Hit submit to see if luck is on your side!</h2>
</div>
<br>

</body>
</html>
