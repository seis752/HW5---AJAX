<?php
include_once('loggedin.php');
include_once ('settings.php');
?>
<ol>
    <?php
        $name=$_GET['nameSearch'];
        $result = mysql_query("Select * from user where name like '%$name%' limit 20");
        while($row=mysql_fetch_array($result)){
            echo '<li>'.$row['name']."-".$row['username'];
        }
        mysql_close($con);
    ?>
</ol>