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

      <div class="contents">
    <br>
    <br>
    <br>


      <?php

     echo " <h2> Admin - confirm </h2> ";
     echo "<br>" . "<br>";?>
     <hr>
     <?php echo "<br>" . "<br>";?>
<?php

$heading = $_GET["heading"];
$tripdate = $_GET["date"];
$duration = $_GET["duration"];
$summary = $_GET["summary"];

     $sql = "INSERT INTO adminconfirm (heading, tripdate, duration, summary)
    VALUES ('$heading', '$tripdate',  '$duration', '$summary')";
    
    if (mysqli_query($conn,$sql)) {
      echo "Data has added successfully to DB";
    } else {
      echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    
?>
<?php echo "<br>" . "<br>";?>

</main>
<div id="adventure-div">
<a href="/php canoe and kayak project 3/all-adventures.php" id="adventure-link">View All Adventures</a>
</div>

      <?php 

include 'footer.php';

?> 