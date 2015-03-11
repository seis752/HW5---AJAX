<?php
    include_once("loggedin.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple form</title>
</head>
<body>
    <h1>
    Simple forms
    </h1>
    <form action="/x/y/z" method="POST">
        Value1:<input type="text" name="value1"/></br>
        Value2:<input type="text" name="value2" value="47"/></br>
        <input type="submit" value="Submit"/>
    </form>

    <a href="logout.php">logout</a>
    <a href="search.php">search</a>


</body>
</html>