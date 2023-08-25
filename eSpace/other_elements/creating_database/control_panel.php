<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    form {
        margin: 10px 100px;
    }

    form input,
    button {
        width: 500px;
        height: 50px;
    }

    form th,
    input,
    button {
        font-size: 25px;
        margin: 10px;
        outline: none;
        border-radius: 10px;
    }

    form button:hover {
        cursor: pointer;
        color: blue;
        text-decoration: underline;
    }
    </style>
</head>

<body>

    <form method="post" action="control_panel.php">
        <h2>Create Table-:</h2>
        <table>
            <tr>
                <th>
                    Table Name:
                </th>
                <th>
                    <input type="text" name="table_name" placeholder="Ex.cse-1st-sem"><br>
                </th>
                <th>
                    <button name="create_table">Create Table</button>
                </th>
            </tr>
        </table>
    </form>
    <hr>
    <form method="post" action="control_panel.php">
        <h2>Insert Subjects and its chapters -:</h2>
        <table>
            <tr>
                <th>
                    In Which Table:
                </th>
                <th>
                    <input type="text" name="tbname" placeholder="Ex.cse-1st-sem"><br>
                </th>
            </tr>
            <tr>
                <th>
                    Subject Name:
                </th>
                <th>
                    <input type="text" name="subject_name" placeholder="Subject name.."><br>
                </th>
            </tr>
            <?php
            $i = 1;
            while($i < 16){
            echo "<tr>
                <th>
                   Chapter $i:
                </th>
                <th>
                    <input type='text' name='chapter$i' placeholder='Chapter $i'><br>
                </th>
                </tr>";

                $i++;
            }
            ?>
            <tr>
                <th>
                    <button name="insert_data">Insert Data</button>
                </th>
            </tr>
        </table>
    </form>



    <?php

$mysqli = new mysqli("localhost","root","","branches");

// if(isset($_POST["create_table"])) {

//     $tableName = $_POST['table_name'];

//     $sql = "CREATE TABLE `branches`.`$tableName` ( `s/n` INT NOT NULL ,  `subjects` VARCHAR(70) NOT NULL ,  `chapter1` VARCHAR(70) NOT NULL ,  `chapter2` VARCHAR(70) NOT NULL ,  `chapter3` VARCHAR(70) NOT NULL ,  `chapter4` VARCHAR(70) NOT NULL ,  `chapter5` VARCHAR(70) NOT NULL ,  `chapter6` VARCHAR(70) NOT NULL ,  `chapter7` VARCHAR(70) NOT NULL ,  `chapter8` VARCHAR(70) NOT NULL ,  `chapter9` VARCHAR(70) NOT NULL ,  `chapter10` VARCHAR(70) NOT NULL ,  `chapter11` VARCHAR(70) NOT NULL ,  `chapter12` VARCHAR(70) NOT NULL ,  `chapter13` VARCHAR(70) NOT NULL ,  `chapter14` VARCHAR(70) NOT NULL ,  `chapter15` VARCHAR(70) NOT NULL ) ENGINE = InnoDB;
//     ";

//     $result = mysqli_query($mysqli,$sql);

//     if($result){
//         echo "<script>alert('table created');</script>";
//     }
//     else{
//         echo "result error";
//     }

// }
// else{
//     echo "Sorry table not created";
// }

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $tableName = $_POST['tbname'];
    $subject = $_POST['subject_name'];
    $chapter1 = $_POST['chapter1'];
    $chapter2 = $_POST['chapter2'];
    $chapter3 = $_POST['chapter3'];
    $chapter4 = $_POST['chapter4'];
    $chapter5 = $_POST['chapter5'];
    $chapter6 = $_POST['chapter6'];
    $chapter7 = $_POST['chapter7'];
    $chapter8 = $_POST['chapter8'];
    $chapter9 = $_POST['chapter9'];
    $chapter10 = $_POST['chapter10'];
    $chapter11 = $_POST['chapter11'];
    $chapter12 = $_POST['chapter12'];
    $chapter13 = $_POST['chapter13'];
    $chapter14 = $_POST['chapter14'];
    $chapter15 = $_POST['chapter15'];
    
        

    $sql = "INSERT INTO `$tableName` (`subjects`, `chapter1`, `chapter2`, `chapter3`, `chapter4`, `chapter5`, `chapter6`, `chapter7`, `chapter8`, `chapter9`, `chapter10`, `chapter11`, `chapter12`, `chapter13`, `chapter14`, `chapter15`) VALUES ('$subject', '$chapter1', '$chapter2', '$chapter3', '$chapter4', '$chapter5', '$chapter6', '$chapter7', '$chapter8', '$chapter9', '$chapter10', '$chapter11', '$chapter12', '$chapter13', '$chapter14', '$chapter15');";

    $result = mysqli_query($mysqli,$sql);

    if($result){
        echo "<script>alert('data inserted');</script>";
    }
    else{
        echo "data not inserted".mysqli_error($mysqli);
    }

}
else{
    echo " ,error";
}

?>
</body>

</html>