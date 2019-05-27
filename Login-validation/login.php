<?php

$uname = $_POST['uname'];
$pass = $_POST ['pass'];
$error = "";
$success = "";

if(isset($_POST['submit'])){
    if($uname == "Admin"){
        if($pass == "password"){
            $error = "";
            $success = "Welcome Admin!!!";
        }
        else{
            $error = "Invalid Password";
            $success = "";
        }
    }
    else{
        $error = "Invalid Username";
        $success = "";
    }
}
?>

<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <title>login</title>
</head>
<body>
<div class="wrapper">
<div class="container"></div>

    <div class="form-container">
        <div class="image-container">
        <img id="user" src="user.jpg" height="150" width="150">
        </div>
    <form class="formHolder" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <div class="form-input">
            <p class="error"><?php echo $error; ?></p><p class="success"><?php echo $success; ?></p>
            <div class="login-container">
                <i class="fa fa-user icon fa-2x cust" aria-hidden="true"></i>
                <input class="input-style" type="text" name="uname" value="" placeholder="Enter Username" required><br>
            </div>
            <div class="login-container">
                <i class="fa fa-lock fa-2x cust icon" aria-hidden="true"></i>
                <input class="input-style" type="password" name="pass" value="" placeholder="Enter Password" required><br>
            </div>
            <input id="btn" type="submit" name="submit" value="LOGIN"><br>
            <a href="">Forget Password</a>
        </div>
    </form>
    </div>

</div>
</body>
</html>