<?php include "db_connection.php"; ?>

<?php
session_start();
if($_SESSION['new_reg'] != true){
    header("location:registration.php");
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>E-diploma | Verifiy Email Address</title>
    <link rel="stylesheet" href="verification.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    
    <div class="container">
        <div class="title">Verification <span id="try_msg"></span></div>
        
        <div class="content">
            
            <!-- -----------form1----------- -->
            <form id="form_email" action="email_otp_verification.php" method="post">
                
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name="email" value="<?php echo $_SESSION['email']; ?>" readonly required>
                    </div>
                </div>
                
                <div class="button">
                    <input type="submit" name="send_OTP" value="Send OTP">
                </div>
                
                <a href="registration.php">Back to registration page</a>
            </form>
            <!------form-end------>

            <!-- ---------form2--------- -->
            <form id="form_otp" style="display: none;" action="email_otp_verification.php" method="post">
                <div class="user-details">

                    <div class="input-box">
                        <span class="details">One Time Password -> <font style="color:rgb(0, 170, 51);">sent</font></span>
                        <input type="text" name="enter_otp" placeholder="Enter-Six-Digit-OTP" required>
                    </div>

                </div>

                <div class="button">
                    <input type="submit" name="verify_OTP" value="Verifiy OTP">
                </div>
                <a href="registration.php">Back to registration page</a>

            </form>
            <!------form-end------>

        </div>
    </div>

<?php 

    // generating otp 
    $digits = 6;
    $rand_otp = strval(rand(pow(10, $digits-1), pow(10, $digits)-1));


    // -------for sending otp----------
    if(isset($_POST['send_OTP'])){

        $to_email = $_POST['email'];
        $subject = "Congratulations!";
        $body = "You E-diploma verification otp is: $rand_otp";
        $headers = "From: honey37bunny@gmail.com";
        
        $session_email = $_SESSION['email'];

        // ------Deleting all the row if email exist before-------
        $delete_row_sql = "DELETE FROM `otp_verification` WHERE email='$session_email'";
        $result = mysqli_query($mysqli,$delete_row_sql);


        $sql = "INSERT INTO `otp_verification` (`s/n`, `email`, `otp`) VALUES (NULL, '$to_email', '$rand_otp');";

        $result = mysqli_query($mysqli,$sql);



        if (mail($to_email,$subject,$body,$headers)) {
            echo "<script>alert('email sent');document.getElementById('form_email').style.display = 'none';document.getElementById('form_otp').style.display = 'block';</script>";
        } else {
            echo "<script>alert('email not sent');</script>";
        }

    }




    // ---------for verifying otp-----------
    if(isset($_POST['verify_OTP'])){

        $email = $_SESSION['email'];
        $enter_otp = $_POST['enter_otp'];
        // echo $enter_otp;

        $sql = "SELECT * FROM `otp_verification` WHERE email='$email'";
        $result = mysqli_query($mysqli,$sql);

        $num = mysqli_num_rows($result);
        
        if($num == 1){

            $full_name = $_SESSION['full_name'];
            $user_name = $_SESSION['user_name'];
            $email = $_SESSION['email'];
            $password = $_SESSION['password'];
            $branch = $_SESSION['branch'];
            $year = $_SESSION['year'];
            $semester = $_SESSION['semester'];
            $phone_number = $_SESSION['phone_number'];
            $gender = $_SESSION['gender'];

            $row = mysqli_fetch_assoc($result);
            // echo $row['otp'];
            if($row['otp'] == $enter_otp){

                // ------Deleting row after verifiying-------
                $delete_row_sql = "DELETE FROM `otp_verification` WHERE email='$email'";
                $result = mysqli_query($mysqli,$delete_row_sql);

                // ---------------Registration-sql-----------
                $registration_sql = "INSERT INTO `user-registration` (`s/n`, `full_name`, `user_name`, `email`, `password`, `branch`, `year`, `semester`, `phone_number`, `gender`, `date/time`) VALUES (NULL, '$full_name', '$user_name', '$email', '$password', '$branch', '$year', '$semester', '$phone_number', '$gender', current_timestamp())";

                $reg_result = mysqli_query($mysqli,$registration_sql);
                
                header("location: login.php");
                
                session_unset();
                session_destroy();

            }else{ 

                // ------Deleting row after verifiying-------
                $delete_row_sql = "DELETE FROM `otp_verification` WHERE email='$email'";
                $result = mysqli_query($mysqli,$delete_row_sql);

                echo "<script>alert('OTP not matched! Try again!');</script>";
            }
            
        }

        
    }

?>


<?php

   

?>
 


</body>

</html>