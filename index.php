<?php
    require_once("functions.php");
    include_once("settings.php");

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
    <div class="right"><a href="logout.php" >Logout</a></div>
    <div class='right'> <?php print $_SESSION['user']; ?></div></br>
    <div class="page">
        <a href="index.php">Profile | </a>
        <a href="friends.php"> Friends | </a>
        <a href="search.php"> Users Search</a>
    </div>


</div>
</body>
</html>

