<?php
$result = $_POST['field']


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Nickname Generator</title>
</head>
<body>


<div class="wrapper">
    <div class="form-wrapper">
    <form action="nickname.php" method="post" id="form">
        <h1>Cool NickName Generator</h1>
        <input type="text" name="field" value="Feed me your name ..." class="input" ><br>
        <div class="button-container">
            <input type="submit" id="btn" value="Generate">
        </div>
    </form>
        <div class="output-wrapper">
            <?php

            if(empty(trim($_POST['field'])))
            {
                // Its empty so throw a validation error
                echo 'Input field is empty';
            }
            else {
                echo $result . "<br>";
                // Prints out the name.

                $result1 = strrev("$result");
                echo $result1. "<br>" ;
                // Turns the name around.

                $result2 = ucfirst("$result1");
                echo $result2.  "<br>" ;
                // Capitalizes the string.


                $result3 = strrev("$result2");
                echo $result3. "<br>" ;
                // Turns the name back around.

                $result4 = "--" . $result3 . "--";
                echo $result4."<br>";
                // Puts -- in front and on the end of the name.

                $result5 = "x" . $result4;
                echo $result5. "<br>";
                // Prints x in front of the name.

                $n = rand(2, 4);
                function getName($n)
                {
                    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $randomString = '';

                    for ($i = 0; $i < $n; $i++) {
                        $index = rand(0, strlen($characters) - 1);
                        $randomString .= $characters[$index];
                    }
                    return $randomString;
                }

                $result6 = getName($n) . $result5;
                echo $result6."<br>";
                // Adds two to four random characters (A-Z, a-z, 0-9) in front of the name.

                $result7 ="[" . getName($n). "]".$result5;
                echo $result7 . "<br>";
                // Wraps those random characters with blocked parentheses []


                $randomNum = rand(0, strlen($result7) - 1);
                // Looks at your result string and takes a position by a random number.

                if (ctype_upper($result7[$randomNum])) {
                    // if that [position] has a uppercase letter assigned to it,

                   $toLower = strtolower($result7[$randomNum]);
                   $result7[$randomNum] = $toLower;
                   // change that letter to lowercase.

                } else {
                    $toUper = strtoupper( $result7[$randomNum]);
                    $result7[$randomNum] = $toUper;

                }
                echo $result7;
                //print out the result.
            }
            ?>
        </div>
    </div>
</div>

</body>
</html>