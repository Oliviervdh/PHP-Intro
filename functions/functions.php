<?php
session_start();

function addGradient($string) {
    $colorRandom = rand(0,360);
    $newString = '';
    for ($i = 0; $i < strlen($string); $i++) {
        $color = $colorRandom + $i*20;
        $newString .=  "<span style='color: hsl($color, 100%, 50%);'>" . $string[$i] . "</span>";
    }
    return $newString;
}

function nickname_generate($result)
{
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


    $bewerking = "";
    $bewerking .= "<br>"."$result";
    $bewerking .= "<br>". strrev("$result");
    $bewerking .= "<br>". ucfirst("$result");
    $bewerking .= "<br>". strrev("$result");
    $bewerking .= "<br>". "--" . $result . "--";
    $bewerking .= "<br>". "x" . $result;
    $bewerking .= "<br>". getName($n) . $result;
    $bewerking .= "<br>". "[" . getName($n) . "]" . $result;
//    $bewerking .= "<br>". rand(0, strlen($result) - 1);

    $randomNum = rand(0, strlen($bewerking) - 1);
    // Looks at your result string and takes a position by a random number.
    if (ctype_upper($bewerking[$randomNum])) {
        // if that [position] has a uppercase letter assigned to it,
        $toLower = strtolower($bewerking[$randomNum]);
        $result7[$randomNum] = $toLower;
        // change that letter to lowercase.
    }

    $gradientName = addGradient($bewerking);
    $bewerking .= "<br>". $gradientName;

    return $bewerking;
};

function object_generate() {

    $sess = json_decode($_SESSION["Session4object"]); // this takes the date saved the SESSION from previous object manipulation and decodes it so its accessible here. "you must open the prev exc so the date gets pushed into the SESSION"
    echo "<pre>";
    print_r($sess);
    echo "</pre>";
}

function object_revert(){

};

?>