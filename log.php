<!DOCTYPE HTML>
<head>
<title>CarZilla | Login Page</title>
<meta charset="utf-8">
<!-- Google Fonts -->

<script src="js/fancybox/jquery.fancybox-1.2.1.js"></script>
</head>
<body>
    <?php
    include 'header.php';
    ?>
    
    <div id="container">

      
        <div class="heading_bg">
            <h2 class="#">Invalid Email And Password Please Try Again</h2>
        </div>
        <form action="log.php" class="TTWForm" method="post" name="adminlog" onsubmit="return hh();">
            <?php
            include 'login1.php';
            ?>
        </form>

    
        <?php

            $con=mysqli_connect("localhost","root","","users");
            if(!$con)
            {
                echo 'connection error............';
            }
             else {
                 if(isset($_POST["nm"]))
                 {
                    $unm=$_POST['t1'];
                    $pw=$_POST['t2'];
                    $ad="select * from admin where Email='$unm' and Password ='$pw'";
                    $adm=mysqli_query($con,$ad);
                    $ada=  mysqli_num_rows($adm);
                    if($ada>=1)
                        {
                            header("location: admin.php");
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
                                    header("loction: log.php");

                                }
                            }
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