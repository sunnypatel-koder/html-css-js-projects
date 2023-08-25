<?php require 'db_connection.php';

if (isset($_POST['register_btn'])) {
    
    
    $email = $_POST['email']; 
    
    $sql = "SELECT * FROM `user-registration` WHERE email='$email'";
    $result = mysqli_query($mysqli,$sql);
    
    $num = mysqli_num_rows($result);
    
    if($num == 0){
        
        session_start();
        $_SESSION['new_reg'] = true;

        $_SESSION['full_name'] = $_POST['full_name'];
        $_SESSION['user_name'] = $_POST['user_name'];
        $_SESSION['password'] = $_POST['confirmed_password'];
        $_SESSION['branch'] = $_POST['branch'];
        $_SESSION['year'] = $_POST['year'];
        $_SESSION['semester'] = $_POST['semester'];
        $_SESSION['phone_number'] = $_POST['phone_number'];
        $_SESSION['gender'] = $_POST['gender'];
        $_SESSION['email'] = $_POST['email'];

        header("location:email_otp_verification.php");
        
    }else{
        echo "<script>alert('email already exist');</script>";
    }
    
}

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="register3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <title>Registration | eSpace | We make learnings easy..</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <style>

        .valid_password {
            color: green;
            font-size: 12px;
            font-weight: 200;
        }

        .invalid_password {
            color: red;
            font-size: 12px;
            font-weight: 200;
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }

        /* Firefox */
        input[type=number] {
          -moz-appearance: textfield;
        }


       
    </style>
</head>

<body>
    <div class="container">

        <div class="title">Registration<span id="try_msg"></span>
                <a href="../index.php" style="float: right; color:black;font-size:22px;margin-top:8px;"><i class="fa fa-home"></i></a>

        </div>

        <div class="content">

            <form id="form" action="registration.php" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input name="full_name" id="full_name"  class="input_fields" type="text" placeholder="Enter your name" minlength="4" maxlength="40">
                    </div>
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input  name="user_name" id="user_name" class="input_fields" type="text" placeholder="Enter your username" minlength="4" maxlength="30">
                    </div>
                    <div class="input-box">
                        <span class="details">Email<span id="validEmail_msg"></span></span>
                        <input name="email" id="email" class="input_fields" maxlength="60" type="email" placeholder="Enter your email" onkeydown="email_validation()" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number <span id="phone_validate_msg"></span></span>
                        <input name="phone_number" id="phone_number" onkeydown="phone_validate()" class="input_fields" type="tel" maxlength="10" placeholder="Enter your number">
                    </div>
                    <div class="input-box">
                        <span class="details">Password <span id="letter" class="invalid"></span><span id="capital" class="invalid"></span><span id="number" class="invalid"></span><span id="length" class="invalid"></span></span>
                        <input id="password" class="input_fields" type="password" placeholder="Enter your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password <span id='message'></span></span>
                        <input name="confirmed_password" id="confirm_password" class="input_fields" type="text" placeholder="Confirm your password">
                    </div>

                    <div class="input-box">
                        <span class="details">Select Year</span>
                        <select name="year" onchange="changeYear()" id="year" class="input_fields" required>
                            <option value="">Select here</option>
                            <option value="1st Year">First Year</option>
                            <option value="2nd Year">Second Year</option>
                            <option value="3rd Year">Third Year</option>
                        </select>
                    </div>

                    <div class="input-box">
                        <span class="details">Select Semester</span>
                        <select name="semester" id="semester" class="input_fields" required>
                            <option value="">Select here</option>
                            <option class="yr1" value="1st SEM">First Semester</option>
                            <option class="yr1" value="2nd SEM">Second Semester</option>
                            <option class="yr2" value="3rd SEM">Third Semester</option>
                            <option class="yr2" value="4th SEM">Fourth Semester</option>
                            <option class="yr3" value="5th SEM">Fifth Semester</option>
                            <option class="yr3" value="6th SEM">Sixth Semester</option>
                        </select>
                    </div>

                    <div class="input-box">
                        <span class="details">Select Branch</span>
                        <select id="long_select" name="branch" class="input_fields branch" required>
                            <option value="">Select here</option>
                            <option value="Civl EPC">Civil EPC</option>
                            <option value="Civil Engineering">Civil Engineering</option>
                            <option value="Mechnical Engineering">Mechnical Engineering</option>
                            <option value="Chemical Engineering">Chemical Engineering</option>
                            <option value="Electrical Enineering">Electrical Engineerig</option>
                            <option value="Computer Science & Engineering">Computer Science & Engineering</option>
                        </select>
                    </div>

                </div>

                <div class="gender-details">
                    <input type="radio" value="Male" name="gender" id="dot-1" required>
                    <input type="radio" value="Female" name="gender" id="dot-2" required>
                    <input type="radio" value="Prefer_not_to_say" name="gender" id="dot-3" required>
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Female</span>
                        </label>
                        <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="gender">Prefer not to say</span>
                        </label>
                    </div>
                </div>
                <div class="button">
                    <input name="register_btn" id="user_reg_btn" style="margin-bottom:10px;" type="submit" value="Register">
                    <span>I have an account? <a href="login.php">Login now</a></span>
                </div> 
            </form>
        </div>
</div>


<!----------------Match-psw1--and----psw2----------------->
    <script>
        $(document).ready(function() {

            $('#password, #confirm_password').on('keyup', function() {
                if ($('#password').val() == "" && $('#confirm_password').val() == "") {

                    $('#message').html('!⚠').css('color', 'red');
                    $('#user_reg_btn').attr('disabled', 'disabled');

                } else if ($('#password').val() == $('#confirm_password').val()) {

                    $('#message').html('✓').css('color', 'green');
                    $('#user_reg_btn').removeAttr('disabled');

                } else {
                    $('#message').html('X').css('color', 'red');
                    $('#user_reg_btn').attr('disabled', 'disabled');
                }
            });
        });
    </script>
    
    
    <!-- -----------------email_validation-------------- -->
    <script>
        function email_validation() {
            var email = document.getElementById("email").value;
            var text = document.getElementById("validEmail_msg");
            var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            var isEmail_valid = "";

            if (email.match(pattern)) {
                text.innerHTML = "-> Your email address is valid ✓"
                text.style.color = "green";
                text.style.fontSize = "12px";
                text.style.marginLeft = "10px";
                text.style.fontWeight = "300";
                  isEmail_valid = true;
            } else if (email == "") {
                text.innerHTML = "";
            } else {
                text.innerHTML = "-> Please enter a valid email*";
                text.style.color = "red";
                text.style.fontSize = "12px";
                text.style.marginLeft = "10px";
                text.style.fontWeight = "300";
                isEmail_valid = false;
            }


            if (isEmail_valid == false) {
                $('#user_reg_btn').attr('disabled', 'disabled');
            } else if (isEmail_valid == true) {
                $('#user_reg_btn').removeAttr('disabled');
            }
        }
    </script>
    
    
       <!-- ----------Password-validation-------- -->
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
                letter.classList.remove("invalid_password");
                letter.classList.add("valid_password");
            } else {
                letter.classList.remove("valid_password");
                letter.classList.add("invalid_password");
            }

            // Validate capital letters
            var upperCaseLetters = /[A-Z]/g;
            if (myInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid_password");
                capital.classList.add("valid_password");
            } else {
                capital.classList.remove("valid_password");
                capital.classList.add("invalid_password");
            }

            // Validate numbers
            var numbers = /[0-9]/g;
            if (myInput.value.match(numbers)) {
                number.classList.remove("invalid_password");
                number.classList.add("valid_password");
            } else {
                number.classList.remove("valid_password");
                number.classList.add("invalid_password");
            }

            // Validate length
            if (myInput.value.length >= 8) {
                length.classList.remove("invalid_password");
                length.classList.add("valid_password");
            } else {
                length.classList.remove("valid_password");
                length.classList.add("invalid_password");
            }


        }
    </script>
    
    <!--------------Phone-number--validation-------->
    <script>
         function phone_validate() {
            var text = document.getElementById("phone_number").value;
            var phone_warn = document.getElementById("phone_validate_msg");
            var regx = /^[6-9]\d{9}$/;
            if (regx.test(text)){
                phone_warn.innerHTML = "✓";
                phone_warn.style.color = "green";
                phone_warn.style.fontSize = "12px";
                phone_warn.style.fontWeight = "200";
            }else if(text == ""){
                phone_warn.innerHTML = "";
            }
            else{
                phone_warn.innerHTML = "Fill correct phone number ↵";
                phone_warn.style.color = "red";
                phone_warn.style.fontSize = "12px";
                phone_warn.style.fontWeight = "200";
            }
         }
    </script>
    
    
    
    
     <script>

        $(document).ready(function(){
            $(".yr1,.yr2,.yr3").hide();
        })

        function changeYear(){
            var year = document.getElementById("year").value;
            if (year == "1st Year"){
                $(".yr1").show();
                $(".yr2,.yr3").hide();
            }else if(year == "2nd Year"){
                $(".yr2").show();
                $(".yr1,.yr3").hide();
            }
            else if(year == "3rd Year"){
                $(".yr3").show();
                $(".yr1,.yr2").hide();
            }
            else if(year == ""){
                $(".yr1,.yr2,.yr3").hide();
            }
        }
    </script>
</body>
</html>