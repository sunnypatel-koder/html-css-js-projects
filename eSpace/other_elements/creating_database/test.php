<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "branch";

    $conn = mysqli_connect($servername,$username,$password,$db;

    $sql = "SHOW TABLES FROM $db";
    $result = mysql_query($sql);

    if (!$result) {
        echo "DB Error, could not list tables\n";
        echo 'MySQL Error: ' . mysql_error();
    exit;
    }

    while ($row = mysql_fetch_row($result)) {
        echo "Table: {$row[0]}\n";
    }

mysql_free_result($result);

    ?>
</body>

</html>