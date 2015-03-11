<?php
    include_once('loggedin.php');
    include_once('settings.php')
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search</title>
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
</head>
<body>
    <div>
        <h2>Search fields</h2>
        <form id="form1" name="form1" method="get" action="searchresults.php">
            <label>
                Name:
                <input type="text" name="nameSearch" id="nameSearch" value="<?php echo $name ?>" />
            </label>
            <label>
                <input type="submit" name="Search" id="Search" value="search"/>
            </label>
                <input type="button" value="JS Search" onclick="handrolled();"/>
        </form>
    </div>
    <div id="resultshere"></div>
</body>
</html>