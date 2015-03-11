<?php
    include_once('loggedin.php');
    require_once("functions.php");
    include_once('settings.php')
?>
<!doctype html>
<html lang="en">
<head>
    <title>Search Page</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

    <script type="text/javascript">
        function handrolled(){
            var nameSearchJsVariableNameOfPower=document.getElementById('nameSearch').value;
            //alert(nameSearchJsVariableNameOfPower);

            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function(){
                if (xhr.readyState == 4){
                    //alert(xhr.responseText);
                    document.getElementById("resultshere").innerHTML = xhr.responseText;
                }
            }
            xhr.open('GET','searchresults.php?nameSearch='+ nameSearchJsVariableNameOfPower, true);
            xhr.send(null);
        }
    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        function getData(str){
            $.ajax({
                type:'post',
                url:'newsearchresults.php',
                data:{"sending":str},
                success: function(data){
                    document.getElementById("jresults").innerHTML = data;
                }
            });
        }
    </script>
</head>
<body>

<div class="main-card">
    <h1>JS Search</h1>
    <div>
        <form id="form1" name="form1" method="get" action="searchresults.php">
            <label>
                <input type="text" name="nameSearch" id="nameSearch" placeholder="search by name" onkeyup="handrolled();" />
            </label>
                <input type="button" value="JS Search" class="login login-submit" onclick="handrolled();"/>
        </form>
    </div>
    <div id="resultshere"></div>

    <h1>jQuery Search</h1>
    <input type="text" id="textfield" placeholder="search by name" onkeyup="getData(this.value)">
    <input type="button" value="jQuery Search" class="login login-submit" onclick=""getData(document.getElementById('textfield').value);"/>
    <div id="jresults"></div>

</div>
</body>
</html>