<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
header("location:loginsystem/login.php");
exit;
}
?>

<?php require 'main_components/db_connection.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
     <link rel = "icon" href = 
"#" 
        type = "image/x-icon">
          
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;1,300&display=swap"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    
    <!-- ----pdf-js--- -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/sidenav.css">
        <link rel="stylesheet" href="css/main_content1.css">
        <link rel="stylesheet" href="css/responsive1.css">
        <link rel="stylesheet" href="css/modal.css">
        <style>
    /* Add a green text color and a checkmark when the requirements are right */
    .modal-content .settingBox .update .valid {
      color: green;
      font-size: 12px;
      font-weight: 200;
    }

    /* Add a red text color and an "x" when the requirements are wrong */
    .modal-content .settingBox .update .invalid {
      color: red;
      font-size: 12px;
      font-weight: 200;
    }
  </style> 
    <title><?php echo $_SESSION['full_name'];?> | Dashboard</title>
</head>

<body>

    <?php require "main_components/navbar.php"; ?>

    <?php require "main_components/modal.php"; ?>

    <?php require "main_components/sidebar.php"; ?>

    <?php require "main_components/main_content.php"; ?>

    <!---------------Sticky-Navbar-------------->
    <script src="js/sticky_nav.js"></script>

    <!-----------------Search-modal--------------->
    <script src="js/modal.js"></script>

    <!------------toggel--Chapters----------->
    <script src="js/toggel_chapters.js"></script>

     <!----------------speech--Javascript-------------->
    <?php include "js/speech.php"; ?>

    <!---------------Main-content------------->
    <script src="js/load-content.js"></script>

    <!-----------context-menu---------->
    <script src="js/contextoff_keyoff.js"></script>
    
        <!---------Prevent-form-resubmission---------->
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>