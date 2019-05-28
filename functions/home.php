<?php
session_start();
require 'security.php';
include 'functions.php';

if($_POST["option"] == "YES") {
    echo "<h2>" . nickname_generate("awesomeNickname") . "</h2>";
} else if ($_POST["option"] == "NO") {
    showHome();
} else if (isset($_POST["generate"]) || isset($_POST["revert"]) || isset($_POST["nickname"])) {
    showHome();

} else {
    securityPage();
}


function handleClick(){

    if (isset($_POST["generate"])) {
        object_generate();
    }

    if (isset($_POST["revert"])) {
        object_revert();
    }

    if (isset($_POST["nickname"])) {
        echo "<pre>";
        print_r(nickname_generate($_POST["nickname"]));
        echo "</pre>";
        unset($_POST["nickname"]);
    }
}

function showHome() {

print <<< HOME

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
<div class="wrapper1">
    <div class="in1">
    <form method="post">
    <button type="submit" name="generate" class="w3-button btn w3-indigo w3-round-xxlarge">Generate object!</button>
    </form>
    </div>
    <div class="out1">

    </div>
</div>

<div class="wrapper2">
    <div class="in2">
    <form method="post">
    <button type="submit" name="revert" class="w3-button btn w3-indigo w3-round-xxlarge">Revert object!</button>
    </form>
    </div>
    <div class="out2">

    </div>
</div>

<div class="wrapper3">
    <div class="in3">
    <form method="post">    
        <button type="submit" name="submit" class="w3-button btn w3-indigo w3-round-xxlarge">Get a nickname!</button>
        <input class="input" name="nickname" type="text">
    </form>
    </div>
    <div class="out3">

    </div>
   </div>

HOME;

handleClick();

print <<< HOME2


</div>
</body>
</html>

HOME2;
};
?>
