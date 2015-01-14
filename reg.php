<!DOCTYPE HTML>
<html>
    <head>
        <title>
            Carzilla | Registration Successful
        </title>
    </head>
 <body>

     <?php
        include 'header.php';
    ?>
        <div id="container">
                    
            <div class="heading_bg">
                <h2>Thanku...!</h2><br><br>
                <h2>We Are Pleased To Welcome You To The CarZilla Community</h2><br>
                <h2>Login With Your Newly Created Id</h2>
            </div>
            <form action="login.php" class="TTWForm" method="post" onsubmit="return hh()">
                <?php
                include 'login1.php';
                ?>
            </form>
                    
        
        <?php
        
        
        
        if (isset($_POST['sb']))
        {
            $t1=$_POST['t1'];
            
            $t2=$_POST['t2'];
            $pw=$_POST['pw'];
            
            $c=$_POST['cont'];
            
            $g1=$_POST['g1'];
            $em=$_POST['em'];
            $ph=$_POST['ph'];

            $con=mysqli_connect("localhost","root","","users");
            if(!$con){
                    echo 'connection error';
                        }
            else {
                $s="insert into register values('$t1','$t2','$em','$pw','$ph','$c','$g1')";
                $r=  mysqli_query($con, $s);
                
               
                
     
            
            }
            
        }
        
        ?>
  <div style="clear:both; height: 40px"></div>
  </div>
<!-- close container -->
<?php
    include 'footer.php';
  ?>
<!-- END footer -->
</body>
</html>