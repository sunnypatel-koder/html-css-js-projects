<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>I Semester | Dashboard | Ved Patel | eDiploma</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>


    <!-- <?php require "components/sidebar.php"; ?>


    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>

            <?php require "components/dash_page.php"; ?>

            <?php require "components/subjects_page.php"; ?>

            <?php require "components/page_2_revision.php"; ?>
 
            <?php require "components/page_3_test.php"; ?>

        </div>
    </section> -->
    <div class="dropdown" style="margin:30px;display:flex;flex-direction:column;">
        <a href="#" class="units_dropper">click and see 1 </a>
        <ul class="units">
            <li>hello1</li>
            <li>hello2</li>
            <li>hello3</li>
        </ul>
        <a href="#" class="units_dropper">click and see 1 </a>
        <ul class="units">
            <li>hello1</li>
            <li>hello2</li>
            <li>hello3</li>
        </ul>
    </div>

    <div class="entry-post">

        <h2 class="entry-title">Post Title 1</h2>

        <div class="entry-content">Lorem Ipsum...

        </div>
    </div>

    <div class="entry-post">
        <h2 class="entry-title">Post Title 2</h2>

        <div class="entry-content">Lorem Ipsum...

        </div>
    </div>

    <!-- ------------Script-for-sidebar-------------  -->
    <script>
    jQuery(document).ready(function($) {
        $(".entry-content").hide();
        $(".entry-title").click(function() {
            $(this).parent().children(".entry-content").slideToggle();
        });
    });
    // function dropdown(){
    //     document.getElementsByClassName("arrow")
    // }
    // $(document).ready(function(){
    //     $(".arrow").click(function(){
    //         $(".subMenu").toggle();
    //     })
    // })
    // let arrow = document.querySelectorAll(".arrow");
    // for (var i = 0; i < arrow.length; i++) {
    //     arrow[i].addEventListener("click", (e) => {
    //         let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
    //         arrowParent.classList.toggle(".subMenu");
    //     });
    // }
    // let sidebar = document.querySelector(".sidebar");
    // let sidebarBtn = document.querySelector(".bx-menu");
    // console.log(sidebarBtn);
    // sidebarBtn.addEventListener("click", () => {
    //     sidebar.classList.toggle("close");
    // });
    </script>


</body>

</html>