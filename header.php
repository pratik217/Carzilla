<?php
    session_start();
?>
<div class="header">
  <div id="site_title"><a href="index.php"><img src="img/logo.png" alt=""></a></div>
  <!-- Main Menu -->
  <ol id="menu">
    <li class="active_menu_item"><a href="index.php">Home</a>
      <!-- sub menu -->
      <ol>
        <li><a href="byprice.php">By Price</a></li>
      <li><a href="bybrand.php">By Brand</a></li>
      <li><a href="bybdytp.php">By Bodytypes</a></li>
      <li><a href="upcoming.php">Upcoming Cars</a></li>
      </ol>
    </li>
      <!-- END sub menu -->
     
    
  <!-- end sub menu -->
  
  <li><a href="#">Cars</a>
    <!-- sub menu -->
    <ol>
      <li><a href="newcars.php">New Cars</a></li>
      <li><a href="usedcars.php">Used Cars</a></li>
      <li><a href="sell.php">Sell cars</a></li>
     
    
    </ol>
  </li>
  <li><a href="aboutus.php">About Us</a></li>
  <!-- end sub menu -->
<li><a href="contact.php">Contact Us</a></li>
  <!-- end sub menu -->
  <?php
    
        if(isset($_SESSION["user"]))
        {
            ?>
                <li><a href="#">
            <?php
            echo  $_SESSION["user"];
            ?>
            </a>
            <ol>
                <li><a href="logout.php">Logout</a></li>
                
            </ol>
                </li>
            
            <?php
        }
 else {
     ?>
     <li><a href="#">Guest</a>
            <ol>

                <li><a href="register.php">Register</a></li>
                <li><a href="adminlog.php">Login</a></li>
            </ol>
     </li>
       <?php
 }
            ?>
     
  
</ol>
</div>