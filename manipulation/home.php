<?php
session_start();
setcookie("Cookie4object","home", (time()+60));

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheet2.css">
    <title>Object Manipulation</title>
</head>
<body>



<h1>Object / Array Manipulation</h1>

<h2>Introduction</h2>

<p>Just like string manipulation, the same goes for all other types of variables, from learning how you can interact with objects, to arrays, to classes, all of these need to feel like a soccer ball with which you can juggle all day long.</p>

<p>Instructions</p>


<h1>STEP 1/2: Create an array, an associative array and an object.</h1>
<?php
echo "<pre>";

$arr_phone_brand = array("Nokia", "Samsung", "Iphone", "Huawei", "Motorola");

$ass_arr_pet_height = array( "dog"=>50, "cat"=>35,"rabbit"=>20, "hamster"=>10);

class PetFood {
    public $name;
    public $price;

    public function setPrice($price){
        $this->price = $price;
    }

    public function getPrice(){
        echo $this->price;
    }


    public function setName($name){
        $this->name =$name;
    }

    public function getName(){
        echo $this->name;
    }
}

$dog_food = new PetFood;
$dog_food -> setName("Royal Canin");
$dog_food -> setPrice("€ 34.99.");

$cat_food = new PetFood;
$cat_food -> setName("Whiskas");
$cat_food -> setPrice("€ 29.98.");


var_dump($arr_phone_brand);
var_dump($ass_arr_pet_height);
var_dump($cat_food);


echo "</pre>";
?>
<h2> STEP 3: Write a for-loop that adds an item to all of the above.</h2>
<?php


function is_assoc($arr) {// check if the array is sequential or associative.

    if(!is_array($arr))
        return;

    return array_keys($arr) !== range(0, count($arr) - 1);
}

$_SESSION[ "array" ] = $arr_phone_brand;
$_SESSION[ "ass-array" ] = $ass_arr_pet_height;
$_SESSION[ "object" ] = $dog_food;

foreach ($_SESSION as $key => $value){ // check if it's an array - ass-array or object, push into them accordingly with the right method.
echo "<pre>";
if(is_array($value)){
    if(is_assoc($value)){
        $value["Pony"] = 105;
    }else{
        array_push($value,"Sony");
    }
}elseif(is_object($value)){
$value -> LiveMouse = "€14.99";
}

print_r($value);
echo "</pre>";
}

?>

<h2>STEP 4: Write an if-statement that has a 20% chance to edit a random item of one of the above.</h2>


<?php
echo "<pre>";
$p = rand(0,99);
if ($p<20){
    $rand_edit = array_rand($arr_phone_brand);
    $arr_phone_brand[$rand_edit] = "Changed by chance!";

}

print_r($arr_phone_brand);


echo "</pre>";
?>
<h2>STEP 5: Put this if statement in a loop so every array/object has a random chance of having a random item changed</h2>
<?php
echo "<pre>";

foreach ($_SESSION as $key => $value){
    echo "<pre>";

    $b = rand(0,99);

    if(is_array($value)){
        if(is_assoc($value)){

            if ($b<20){
                $rand_edit = array_rand($value);
                $value[$rand_edit] = "Changed by foreach loop!";

            }
        }else{

            if ($b<20){
                $rand_edit = array_rand($value);
                $value[$rand_edit] = "Changed by foreach loop!";

            }
        }
    }elseif(is_object($value)){

        if ($b<20){
            $rand_edit = array_rand($value);
            $value[$rand_edit] = "Changed by foreach loop!";

        }
    }

    print_r($value);
    echo "</pre>";

}
?>
<h2>STEP 6: Divide the array in half (if uneven items half-1, unless half-1 makes it empty)</h2>
<?php
echo "<pre>";

$array_count = count($arr_phone_brand);
// checks the length of the your array.

$array_pos = floor($array_count /2);
// uses floor to divide the array into it by two parts and rounds the result down to an even number.

$sliced_array_first = array_slice($arr_phone_brand,0,$array_pos);

$sliced_array_second = array_slice($arr_phone_brand, $array_pos, 2);
// uses array slice or chunk to break the array down into half.


print_r($sliced_array_first);
print_r($sliced_array_second);
// prints the arrays.


echo "</pre>";
?>
<h2>STEP 7: Remove the last item of the associative array</h2>
<?php
echo "<pre>";

unset($ass_arr_pet_height['hamster']);
print_r($ass_arr_pet_height);


echo "</pre>";
?>
<h2>STEP 8: Add the arrays to the object as arr1 and arr2</h2>
<?php
echo "<pre>";

$cat_food -> arr1 = $sliced_array_first; // adds the first part of sliced array to the object.
$cat_food -> arr2 = $sliced_array_second; // adds the second ............

print_r($cat_food);


echo "</pre>";
?>
<h2> STEP 9: Loop through the associative array adding all items to the object as key => value </h2>
<?php
echo "<pre>";

foreach ($ass_arr_pet_height as $key => $value){ //
    $dog_food -> $key = $value;
}
print_r($dog_food);

echo "</pre>";
?>
<h2>STEP 10: Save the object in the $_COOKIE super-global</h2>
<?php
echo "<pre>";

$dog_food_cookie = json_encode($dog_food);
$_COOKIE["Cookie4object"] = $dog_food_cookie;

echo "</pre>";
?>
<h2>STEP 11: Find a way to print this final object on the homepage, in an easily readable way.</h2>
<?php
echo "<pre>";
print_r(json_decode($_COOKIE["Cookie4object"]));
echo "</pre>";
?>



</body>
</html>
