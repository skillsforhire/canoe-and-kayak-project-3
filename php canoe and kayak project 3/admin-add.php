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

     echo " <h2> Admin - Add Adventure </h2> ";
     echo "<br>" . "<br>";?>

     
<hr>

<?php echo "<br>" . "<br>"; ?> 

   <?php echo "input details about the trip"; 
    echo "<br>" . "<br>";

 ?>  
 <form action="admin-confirm.php" method="get">

<?php echo "Heading"; ?> 
<input type="heading" name="heading"> 
 <?php echo "<br>" . "<br>";?> 

 <?php echo "Tripdate"; ?> 
 <input type="date" name="date"> 
<?php echo "<br>" . "<br>"; ?> 

<?php echo "Duration"; ?> 
<input type="duration" name="duration">
<?php echo "<br>" . "<br>"; ?> 

<?php echo "Summary"; ?> 
<input type="summary" name="summary">
<?php echo "<br>" . "<br>"; ?>

<input type="submit" value="Submit">

</form>
 



<?php
include 'footer.php';

?> 