<html>
    <head>
        <title>
            carzilla | Login Again
        </title>
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
         <div id="container">
  
  
    
      
   
        
        
        <?php
        $con=mysqli_connect("localhost","root","","users");
        if(!$con)
        {
            echo 'connection error............';
        }
         else {

            $unm=$_POST['t1'];
            $pw=$_POST['t2'];
                if($unm=="admin@123.com" && $pw=="@dmin")
                {
                    header("location: log.php");
                }
 else 
                    {

 


                        $sq="select * from register where Email='$unm' and Password ='$pw'";
                        $am=mysqli_query($con,$sq);
                        $num= mysqli_num_rows($am);
                        
                        if($num>=1)
                        {
                            
                            $result= mysqli_fetch_array($am); 
                            $_SESSION["user"]=$result['Firstname'];
                            header("location: index.php");

                            
                        }
                        else
                        {
                            
                            ?>
                                <div class="heading_bg">
                                          <h2>Invalid Email And Password Please Try Again</h2>
                                      
                                </div> 
                               <form action="login.php" class="TTWForm" method="post" name="adminlog" onsubmit="return hh();">
                                        <?php
                                                                    include 'login1.php';
                                        ?>
                                   
                               
                               </form>
                                       
                            <?php
                            
                        }
                    }
                }
                
                ?>
              <div style="clear:both; height: 40px"></div>
  </div>
    
             
             <?php
            
                include 'footer.php';

        ?>
    </body>
</html>