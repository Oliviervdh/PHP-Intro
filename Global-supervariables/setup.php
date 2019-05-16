<?php

?>

<!doctype html>
<html>
<head>
    <title>Setup</title>
</head>
<body>
<form action="result.php" method="post">
    Top 5 tv shows: <br>
    <input type="text" placeholder="Show 1" name="Top-shows[]"/> <br>
    <input type="text" placeholder="Show 2" name="Top-shows[]"/> <br>
    <input type="text" placeholder="Show 3" name="Top-shows[]"/> <br>
    <input type="text" placeholder="Show 4" name="Top-shows[]"/> <br>
    <input type="text" placeholder="Show 5" name="Top-shows[]"/> <br>
    top 5 movies: <br>
    <input type="text" placeholder="Movie 1" name="Top-movies[]"/> <br>
    <input type="text" placeholder="Movie 2" name="Top-movies[]"/> <br>
    <input type="text" placeholder="Movie 3" name="Top-movies[]"/> <br>
    <input type="text" placeholder="Movie 4" name="Top-movies[]"/> <br>
    <input type="text" placeholder="Movie 5" name="Top-movies[]"/> <br>
    <input type="submit" value="submit">
</form>

<br>

<form action="result.php" method="get">
    Favourite country:<input type="text" placeholder="Favorite country" name="Favourite-country"/>
    Worst movie ever seen:<input type="text" placeholder="Worst movie ever" name="Worst-movie"/>
    <input type="submit" value="submit">
</form>



</body>
</html>
