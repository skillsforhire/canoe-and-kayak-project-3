<?php

    include 'header.php';

?>

<?php

    include 'navigation.php';

?>
<header>
        
        <h1>Halifax canoe and kayak</h1>
          
    </header>

    

    <ul class="nav">
        
        <li><a href="#">Home</a></li>
        
        <li><a href="#">Book Trip</a></li>
        
        <li><a href="#">Admin Login</a></li>

    </ul>
    
    <button class="menu-btn">
            
        <img src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/hamburger.png" />
            
   </button>

    
      <div class="logo">
        <img src="images/paddle-white.png">
      </div>
       
      <main>
        
        <div class="container">
            <img src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/canoe.jpg">
            <div class="text-block">Come expirence Canada</div>
        </div>
        <h2>Upcoming Adventures <h2>
        <?php echo "<br>"?> 
            <hr>
      <?php
$sql = "SELECT * FROM adminconfirm";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) { 
  

        $heading = $row["heading"];
        $tripDate = $row["tripdate"];
        $duration = $row["duration"];
        $summary = $row["summary"];

        echo "<br>";
        echo "<h3>$heading</h3>";
        echo "<br>";
        echo "<p>Date: $tripDate </p>";
        echo "<p>Duration: $duration days</p>";
        echo "<br>";
        echo "<h4>Summary</h4>";
        echo "<p>$summary</p>";
        
        
        
      }
    } else {
      echo "0 results";
    }

    ?>

<?php 

include 'footer.php';

?> 




    
    
                
       
            
    