<?php

    include "main_components/db_connection.php";


    
if(isset($_POST['login_button'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    // echo "<script>alert('clicked');</script>";
    echo "<script>alert('$email and $password');</script>";

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
        header("location:dashboard.php");

        // echo "<script>alert('successf');</script>";

    }
    else{
        echo "<script>alert('Fill Correct Credentials');</script>";
    }

}


?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>eSpace | Diploma students easy prepration..</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="home.css">
    </head>

    <body>
        <div class="container">
            <div id="header">

                <ul class="head-item" id="logo-section">
                    <li><img style="padding:10px;" src="img/companylogo.png"></li>
                    <h2>eSpace</h2>
                </ul>

                <ul class="head-item" id='center-section'>
                    <li class="active"><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Courses<i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
                    <li>
                        <a href="">Blog</a>
                    </li>
                    <li>
                        <a href="">Discord</a>
                    </li>
                </ul>

                <ul id="hamburger">
                    <li id="menu-bar">☰</li>
                    <div class="menu-item">
                        <ul>
                            <li class="active"><a href="">Home</a></li>
                            <li><a href="">Tutorials <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
                            <li><a href="">Courses <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
                            <li><a href="">Online IDE</a></li>
                        </ul>
                    </div>
                </ul>

                <ul class="head-item" id="search-section">

                    <form id="search" action="">
                        <input type="text">
                        <button><i class="fa fa-search"></i></button>
                    </form>

                    <!-- -----------responsive---search----------- -->
                    <button class="responsive-btn"><i class="fa fa-search"></i></button>
                    <ul class="responsive-search">
                        <li><input type="text"></li>
                        <li><a href="">Search</a></li>
                    </ul>

                </ul>

            </div>

            <div id="first-impression">
                <div class="col col2">
                    <div class="front-line">
                        <span><h2>We makes learning<br>easy<span id="threeDot">...</span></h2>
                        </span>
                        <div>
                            <span class="txt-rotate" data-period="1000" data-rotate='[ "Talk is cheap. Show me the code. - Linus Torvalds", "Developer is an organism that turns coffee into code.", "One man’s crappy software is another man’s full time job.", "I’m not a great programmer; I’m just a good programmer with great habits.", "Code is like humor. When you have to explain it, it’s bad." ]'></span>
                        </div>
                        <a href="loginsystem/registration.php"><button style="padding:7px 20px; margin-top:20px;margin-left:7px;color:white;background-color:tomato; font-size:17px;border-radius:4px;border:none;">Register now</button></a>
                    </div>
                </div>

                <div class="col col1">
                    <form action="index.php" method="POST">
                        <h2>Start Learning!</h2>
                        <div>
                            <span id="try_msg"></span>
                            <label for="email">Email</label>
                            <input type="email" name="email">
                        </div>
                        <div>
                            <label for="password">Password</label>
                            <input type="password" name="password">
                        </div>
                        <div>
                            <button name="login_button">Login</button>
                            <p style="margin-top: 1px;">I don't have account?<a href="loginsystem/registration.php" style="text-decoration: underline;color:rgb(124, 124, 255);"> Register now</a></p>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="courses">
            <div class="row">
                <h2>Popular Courses</h2>
                <div class="underline"></div>
                <div class="cards">

                    <div class="boxes">
                        <img class="card__img" src="img/civil.jpg" alt="Civil Engineering">
                        <div class="content">
                            <span>Civil Engineering</span>
                            <p>Lorem, ipsum dolor sit fugit quasi nobis. Natus sequi dignissimos fugiat nam omnis ratione quas obcaecati dolorum.</p>
                            <button>Explore -></button>
                        </div>
                    </div>
                    <div class="boxes">
                        <img class="card__img" src="img/computer.jpg" alt="Computer Science and Engineering">
                        <div class="content">
                            <span>Computer Science</span>
                            <p>Lorem, ipsum dolor sit fugit quasi nobis. Natus sequi dignissimos fugiat nam omnis ratione quas obcaecati dolorum.</p>
                            <button>Explore -></button>
                        </div>
                    </div>
                    <div class="boxes">
                        <img class="card__img" src="img/electrical.jpg" alt="Electrical Engineering">
                        <div class="content">
                            <span>Electrical Engineering</span>
                            <p>Lorem, ipsum dolor sit fugit quasi nobis. Natus sequi dignissimos fugiat nam omnis ratione quas obcaecati dolorum.</p>
                            <button>Explore -></button>
                        </div>
                    </div>


                </div>

            </div>

        </div>



        <div class="courses">
            <div class="row">
                <h2>Marketplace</h2>
                <div class="underline"></div>
                <div class="cards">

                    <div class="boxes">
                        <img class="card__img" src="img/civil.jpg" alt="Civil Engineering">
                        <div class="content">
                            <span>Civil Engineering</span>
                            <p>Lorem, ipsum dolor sit fugit quasi nobis. Natus sequi dignissimos fugiat nam omnis ratione quas obcaecati dolorum.</p>
                            <button>Explore -></button>
                        </div>
                    </div>
                    <div class="boxes">
                        <img class="card__img" src="img/computer.jpg" alt="Computer Science and Engineering">
                        <div class="content">
                            <span>Computer Science</span>
                            <p>Lorem, ipsum dolor sit fugit quasi nobis. Natus sequi dignissimos fugiat nam omnis ratione quas obcaecati dolorum.</p>
                            <button>Explore -></button>
                        </div>
                    </div>
                    <div class="boxes">
                        <img class="card__img" src="img/electrical.jpg" alt="Electrical Engineering">
                        <div class="content">
                            <span>Electrical Engineering</span>
                            <p>Lorem, ipsum dolor sit fugit quasi nobis. Natus sequi dignissimos fugiat nam omnis ratione quas obcaecati dolorum.</p>
                            <button>Explore -></button>
                        </div>
                    </div>


                </div>

            </div>

        </div>


        <footer class="footer-distributed">

            <div class="footer-left">

                <h3>e<span>Space</span></h3>

                <p class="footer-links">
                    <a href="#">Home |</a>
                    <a href="#">Blog |</a>
                    <a href="#">Pricing |</a>
                    <a href="#">About |</a>
                    <a href="#">Faq |</a>
                    <a href="#">Contact |</a>
                </p>

                <p class="footer-company-name">eSpace © 2022</p>

                <div class="footer-icons">

                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>

                </div>

            </div>

            <div class="footer-right">

                <p>Contact Us</p>

                <form action="#" method="post">

                    <input type="text" name="email" placeholder="Email">
                    <textarea name="message" placeholder="Message"></textarea>
                    <button>Send</button>

                </form>

            </div>

        </footer>

        <!-- -----------------Headear-section----------------- -->
        <script>
            $(document).ready(function() {

                $(".responsive-btn").click(function() {
                    $(".responsive-search").fadeToggle(170);
                })

                $("#menu-bar").click(function() {
                    $(".menu-item").fadeToggle(700);
                })
            })
        </script>
        <script src="js/typing_effect.js"></script>
    </body>

    </html>