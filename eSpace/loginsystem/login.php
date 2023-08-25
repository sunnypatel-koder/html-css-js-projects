<?php require 'db_connection.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Login | eSpace | We make learnings easy..</title>
</head>

<body>
    <div class="container">

        <div class="title">LogIn 
            <span style="margin: 7px;" id="try_msg"></span>
                    <a href="../index.php" style="float: right; color:black;font-size:22px;margin-top:8px;"><i class="fa fa-home"></i></a>

        </div>
        <div class="content">
            <form action="login.php" method="POST">
                <div class="user-details">

                    <div class="input-box">
                        <span class="details">Email</span>
                        <input name="email" type="text" placeholder="Enter your email" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Password</span>
                        <input style="position: relative;" name="password" type="password" placeholder="Enter your password" id="id_password" required>
                        <i class="far fa-eye" id="togglePassword" style="position: absolute;right:37px;margin-top:-30px;"></i>
                    </div>

                </div>


                <div class="button">
                    <input name="login_btn" type="submit" value="LogIn ->" style="margin-bottom: 10px;">
                    <span>Not have an account? <a href="registration.php">Register now</a></span>
                </div>
            </form>


        </div>
    </div>


    <?php

if(isset($_POST['login_btn'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `user-registration` WHERE `email`='$email' AND `password`='$password'";
    $result = mysqli_query($mysqli,$sql);

    $num = mysqli_num_rows($result);

    if($num == 1){
        $row = mysqli_fetch_assoc($result);

        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['full_name'] = $row['full_name'];
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['branch'] = $row['branch'];
        $_SESSION['year'] = $row['year'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['semester'] = $row['semester'];
        $_SESSION['gender'] = $row['gender'];
        header("location:../dashboard.php");

        echo "<script>document.getElementById('try_msg').innerHTML = '-> Successfully LogedIn';document.getElementById('try_msg').style.fontSize = '14px';document.getElementById('try_msg').style.color = 'green';</script>";

    }
    else{
        echo "<script>document.getElementById('try_msg').innerHTML = '-> Fill Correct Credentials';document.getElementById('try_msg').style.fontSize = '14px';document.getElementById('try_msg').style.color = 'red';</script>";
    }

}
    ?>




    <script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#id_password');

    togglePassword.addEventListener('click', function(e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });
    </script>
</body>

</html>