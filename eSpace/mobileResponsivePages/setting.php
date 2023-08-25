<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location:../loginsystem/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="setting.css">
    <title>eSpace | Helping Hand for diploma students</title>
    <style>
    /* Add a green text color and a checkmark when the requirements are right */
    .update .valid {
      color: green;
      font-size: 12px;
      font-weight: 200;
    }

    /* Add a red text color and an "x" when the requirements are wrong */
    .update .invalid {
      color: red;
      font-size: 12px;
      font-weight: 200;
    }
  </style> 
</head>

<body>


<?php

include "../main_components/db_connection.php";

if (isset($_POST['saveChanges'])) {

  $email = $_SESSION['email'];

  $updated_password = $_POST['update_password'];
  $updated_semester = $_POST['update_semester'];
  $updated_username = $_POST['user_name'];

  // -----------for-Updating-Username-----------

  if($updated_username == ""){

  }
  else{
    $sql = "UPDATE `user-registration` SET `user_name` = '$updated_username' WHERE `user-registration`.`email` = '$email'";
    $result = mysqli_query($mysqli, $sql);

    if($result){
      echo "<script>alert('Save Changes Successfully!')</script>";
    }
    else{
      echo "<script>alert('sorry failed to change')</script>";
    }
  }

  // --------for-Upadatating-Password--------

  if ($updated_password == "") {

    // null;

  } else {

    $sql = "UPDATE `user-registration` SET `password` = '$updated_password' WHERE `user-registration`.`email` = '$email';";

    $result = mysqli_query($mysqli, $sql);

    if ($result) {
      echo "<script>alert('Save Changes Successfuly!');</script>";
    } else {
      echo "<script>alert('Sorry Failed to Change!');</script>";
    }

    $to_email = $_SESSION['email'];
    $subject = "Congratulations!";
    $body = "Your Password is updated successfully: $updated_password";
    $headers = "From: honey37bunny@gmail.com";


    if (mail($to_email, $subject, $body, $headers)) {
      echo "<script>alert('email sent');</script>";
    } else {
      echo "<script>alert('email not sent');</script>";
    }

  }

  
  // ------for---updating---Semester------------

  if ($updated_semester == "") {

    // echo "<script>alert('novalue');</script>";
    // null;

  } else if ($updated_semester == '1st SEM') {

    // SQL FOR SEMESTER 
    $sql1 = "UPDATE `user-registration` SET `semester` = '$updated_semester' WHERE `user-registration`.`email` = '$email';";
    $result1 = mysqli_query($mysqli, $sql1);

    $sql2 = "UPDATE `user-registration` SET `year` = '1st Year' WHERE `user-registration`.`email` = '$email';";
    $result2 = mysqli_query($mysqli, $sql2);

    if ($result1 == true && $result2 == true) {
      echo "<script>alert('Save Changes Successfuly!');</script>";
      echo "<script>window.location.href = '../loginsystem/user-logout.php ';</script>";
    } else {
      echo "<script>alert('Sorry Failed to Change!');</script>";
    }
  } else if ($updated_semester == '2nd SEM') {

    // SQL FOR SEMESTER 
    $sql1 = "UPDATE `user-registration` SET `semester` = '$updated_semester' WHERE `user-registration`.`email` = '$email';";
    $result1 = mysqli_query($mysqli, $sql1);

    $sql2 = "UPDATE `user-registration` SET `year` = '1st Year' WHERE `user-registration`.`email` = '$email';";
    $result2 = mysqli_query($mysqli, $sql2);

    if ($result1 == true && $result2 == true) {
      echo "<script>alert('Save Changes Successfuly!');</script>";
      echo "<script>window.location.href = '../loginsystem/user-logout.php ';</script>";
    } else {
      echo "<script>alert('Sorry Failed to Change!');</script>";
    }
  } else if ($updated_semester == '3rd SEM') {

    // SQL FOR SEMESTER 
    $sql1 = "UPDATE `user-registration` SET `semester` = '$updated_semester' WHERE `user-registration`.`email` = '$email';";
    $result1 = mysqli_query($mysqli, $sql1);

    $sql2 = "UPDATE `user-registration` SET `year` = '2nd Year' WHERE `user-registration`.`email` = '$email';";
    $result2 = mysqli_query($mysqli, $sql2);

    if ($result1 == true && $result2 == true) {
      echo "<script>alert('Save Changes Successfuly!');</script>";
      echo "<script>window.location.href = '../loginsystem/user-logout.php ';</script>";
    } else {
      echo "<script>alert('Sorry Failed to Change!');</script>";
    }
  } else if ($updated_semester == '4th SEM') {

    // SQL FOR SEMESTER 
    $sql1 = "UPDATE `user-registration` SET `semester` = '$updated_semester' WHERE `user-registration`.`email` = '$email';";
    $result1 = mysqli_query($mysqli, $sql1);

    $sql2 = "UPDATE `user-registration` SET `year` = '2nd Year' WHERE `user-registration`.`email` = '$email';";
    $result2 = mysqli_query($mysqli, $sql2);

    if ($result1 == true && $result2 == true) {
      echo "<script>alert('Save Changes Successfuly!');</script>";
      echo "<script>window.location.href = '../loginsystem/user-logout.php ';</script>";
    } else {
      echo "<script>alert('Sorry Failed to Change!');</script>";
    }
  } else if ($updated_semester == '5th SEM') {

    // SQL FOR SEMESTER 
    $sql1 = "UPDATE `user-registration` SET `semester` = '$updated_semester' WHERE `user-registration`.`email` = '$email';";
    $result1 = mysqli_query($mysqli, $sql1);

    $sql2 = "UPDATE `user-registration` SET `year` = '3rd Year' WHERE `user-registration`.`email` = '$email';";
    $result2 = mysqli_query($mysqli, $sql2);

    if ($result1 == true && $result2 == true) {
      echo "<script>alert('Save Changes Successfuly!');</script>";
      echo "<script>window.location.href = '../loginsystem/user-logout.php ';</script>";
    } else {
      echo "<script>alert('Sorry Failed to Change!');</script>";
    }
  } else if ($updated_semester == '6th SEM') {

    // SQL FOR SEMESTER 
    $sql1 = "UPDATE `user-registration` SET `semester` = '$updated_semester' WHERE `user-registration`.`email` = '$email';";
    $result1 = mysqli_query($mysqli, $sql1);

    $sql2 = "UPDATE `user-registration` SET `year` = '3rd Year' WHERE `user-registration`.`email` = '$email';";
    $result2 = mysqli_query($mysqli, $sql2);

    if ($result1 == true && $result2 == true) {
      echo "<script>alert('Save Changes Successfuly!');</script>";
      echo "<script>window.location.href = '../loginsystem/user-logout.php ';</script>";
    } else {
      echo "<script>alert('Sorry Failed to Change!');</script>";
    }
  }
}


?>

    <div class="setting_head">
        <h1><i class="fa fa-gear fa-spin"></i>Profile Settings<a href="../dashboard.php"><i style="font-size:27px;margin-top:4px; color:black;" class="fas fa-arrow-left"></i></a></h1>
    </div>

    <div class="setting_form">

        <form action="setting.php" method="post">

            <div class="profile-upload update">

                <label for="file-input">
                   <i style="font-size:80px;padding:10px;" class="far fa-user"></i>
                </label>
                <input id="file-input" type="file" style="display: none;" />
                <span>Change Profile Image</span>

            </div>

            <div class="change-username update">
                <span>Update Username:</span>
                <input type="text" name="user_name" placeholder="Fill it to update it......" />
            </div>

            <div class="change-password update" onkeydown="showPass_warn()">
                <span class="details">Update Password: <span id="letter" class="invalid"></span><span id="capital" class="invalid"></span><span id="number" class="invalid"></span><span id="length" class="invalid"></span></span>
                <input placeholder="Fill it to update it......" type="password" id="password" name="update_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
            </div>

            <div class="change-semester update">

                <select name="update_semester" id="">
                    <option value="">Change Semester</option>
                    <option value="1st SEM">1st SEM</option>
                    <option value="2nd SEM">2nd SEM</option>
                    <option value="3rd SEM">3rd SEM</option>
                    <option value="4th SEM">4th SEM</option>
                    <option value="5th SEM">5th SEM</option>
                    <option value="6th SEM">6th SEM</option>
                </select>

            </div>

            <div class="save_btn update">
                <button name="saveChanges">Save Changes</button>
            </div>

        </form>
        <p style="font-size:13px;"><strong>Note:</strong> Leave empty if did not want to make changes.</p>
    </div>

      <!-- ----------Update-Password-validation-------- -->
  <script>
    var myInput = document.getElementById("password");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");


    // When the user starts to type something inside the password field
    myInput.onkeyup = function() {

      // writing text
      letter.innerHTML = "Lower,&nbsp;";
      capital.innerHTML = "Capital,&nbsp;";
      number.innerHTML = "Number,&nbsp;";
      length.innerHTML = "Max(8 char)*";

      // Validate lowercase letters
      var lowerCaseLetters = /[a-z]/g;
      if (myInput.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalid");
        letter.classList.add("valid");
      } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
      }

      // Validate capital letters
      var upperCaseLetters = /[A-Z]/g;
      if (myInput.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
      } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
      }

      // Validate numbers
      var numbers = /[0-9]/g;
      if (myInput.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
      } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
      }

      // Validate length
      if (myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
      } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
      }


      if (length.classList == "valid" && number.classList == "valid" && capital.classList == "valid" && letter.classList == "valid") {

        length.style.display = "none";
        number.style.display = "none";
        capital.style.display = "none";
        // letter.style.display = "none";
        letter.style.fontSize = "14px";
        letter.innerHTML = "✓";

      } else {

        length.style.display = "inline-block";
        number.style.display = "inline-block";
        capital.style.display = "inline-block";
        letter.style.display = "inline-block";

      }

      if (myInput.value == "") {
        length.style.display = "none";
        number.style.display = "none";
        capital.style.display = "none";
        letter.style.display = "none";
      }


    }
  </script>

</body>

</html>