<div id="help_sidenav">
</div>
<div id="sidenav">

    <h2><?php echo $_SESSION['semester'];?> - Notes</h2>

    <?php

    $session_branch = $_SESSION['branch'];
    $session_semester = $_SESSION['semester'];

    if($session_branch == 'Computer Science & Engineering' && $session_semester == '1st SEM'){
      
      $branch = 'cse';
      $theSemester = 'cse-1st-sem';
      
    }
    else if($session_branch == 'Computer Science & Engineering' && $session_semester == '2nd SEM'){
      
      $branch = 'cse';
      $theSemester = 'cse-2nd-sem';
      
    }
    else if($session_branch == 'Computer Science & Engineering' && $session_semester == '3rd SEM'){
      
      $branch = 'cse';
      $theSemester = 'cse-3rd-sem';
      
    }
    else if($session_branch == 'Computer Science & Engineering' && $session_semester == '4th SEM'){
      
      $branch = 'cse';
      $theSemester = 'cse-4th-sem';
      
    }
    else if($session_branch == 'Computer Science & Engineering' && $session_semester == '5th SEM'){

      $branch = 'cse';
      $theSemester = 'cse-5th-sem';

    }
    else if($session_branch == 'Computer Science & Engineering' && $session_semester == '6th SEM'){

      $branch = 'cse';
      $theSemester = 'cse-6th-sem';

    }
    else{

      echo "<h2>Try till success!</h2>";

    }
    
    $sql = "SELECT * FROM `$theSemester`";
    $result = mysqli_query($mysqli, $sql);
    $num = mysqli_num_rows($result);
    
    while($row = mysqli_fetch_assoc($result)){
      echo "<div class='sub-container'>";
      $get_sub_name = $row['subjects'];
      $sub_name = preg_replace('/_/',' ',$get_sub_name);
      echo "<a href='#' class='units_dropper'>".$sub_name."</a><br>";
      echo "<ul class='units'>";
      $subject = $row['subjects'];
      
      $i = 1;
      foreach ($row as $chapters) {
        // echo $value;
        if($chapters == $row['s/n']){
            echo NULL;
          }
          else if($chapters == $row['subjects']){
            echo NULL;
          }
          else if($chapters == NULL){
            echo NULL;
        }
        else{

            $reactHere = "branches/$branch/$theSemester/$subject/chapter$i.html";
            echo "<li><a href='$reactHere'>☆ ".$chapters."</a></li>";
          // echo $subject;
          $i++;
          
        } 
      }
      echo "</ul>";
      echo "</div>";
      
    }
    
echo "<p style='margin-bottom:100px;'></p>";
   
      ?>


</div>