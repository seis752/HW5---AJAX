<?php
    require_once("functions.php");
    include_once("loggedin.php");
?>
<!doctype html>
<html lang="en">
<head>
    <title>Some Page</title>
    <script src="script.js" type="text/javascript"></script><!-- put it on user area pages -->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
</head>
<body>
<div class="main-card">
    <h1>
    Some Page
    </h1>
    <form action="/x/y/z" method="POST">
        Value1:<input type="text" name="value1"/></br>
        Value2:<input type="text" name="value2" value="47"/></br>
        <input type="submit" value="Submit"/>
    </form>

    <a href="logout.php">logout</a>
    <a href="search.php">search</a>

</div>
</body>
</html>