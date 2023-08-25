<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    I am the index page.
    <?php
    if(URL === "/")
    {
        require_once("root.php");
    }
    else if(URL === "/shop")
    {
        require_once("shop.php");
    }
    else if(URL === "/contact")
    {
        require_once("contact.php");
    }
    

    
    else
    {
        require_once("404.php");
    }
    ?>
</body>
</html>