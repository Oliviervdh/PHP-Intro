<?php

?>

<!doctype html>
<html>
<head>
    <title>Setup</title>
</head>
<body>
<form action="result.php" method="post" target="outputOne">
    Top 5 tv shows:<input type="text" id="shows" name="Top-shows"/>
    top 5 movies:<input type="text" id="topMovies" name="Top-movies"/>
    <input type="submit" id="one" value="submit">
</form>

<br>

<form action="result.php" method="get" target="outputTwo">
    Favourite country:<input type="text" id="country" name="Favourite-country"/>
    Worst movie ever seen:<input type="text" id="worstMovie" name="Worst-movie"/>
    <input type="submit" id="two" value="submit">
</form>



</body>
</html>
