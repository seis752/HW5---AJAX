<?php

include_once "settings.php";

    if ($_SESSION['user'] ){
        header("Location: index.php");
    }
    if (isset($_GET['username'])){
        $name= $_GET['username'];
        $password= $_GET['password'];
        $sql= "select * from user where username='$name' and password='$password' limit 1";
        $result=mysql_query($sql);
        while($row = mysql_fetch_array($result))
        {
            $_SESSION['user']=$name;
            header('Location: index.php');
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<body>
<h1>
    Login Form
</h1>
<form action="login.php" method="GET">
    username:<input type="text" name="username" id="username"" "/></br>
    password:<input type="password" name="password" id="password"/></br>
    <input type="submit" value="Submit"/>
</form>
</body>
</html>