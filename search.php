<?php
    include_once('loggedin.php');
    include_once('settings.php')
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search</title>
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
                <input type="button" value="JS Search"/>
        </form>
    </div>
    <div id="resultshere"></div>
</body>
</html>