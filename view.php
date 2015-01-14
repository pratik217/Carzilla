<!DOCTYPE HTML>
<head>
<title>CarZilla | About Us</title>
<meta charset="utf-8">
<!-- Google Fonts -->

<script src="js/jquery.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/slides/slides.min.jquery.js"></script>
<script src="js/cycle-slider/cycle.js"></script>
<script src="js/nivo-slider/jquery.nivo.slider.js"></script>
<script src="js/tabify/jquery.tabify.js"></script>
<script src="js/prettyPhoto/jquery.prettyPhoto.js"></script>
<script src="js/twitter/jquery.tweet.js"></script>
<script src="js/scrolltop/scrolltopcontrol.js"></script>
<script src="js/portfolio/filterable.js"></script>
<script src="js/modernizr/modernizr-2.0.3.js"></script>
<script src="js/easing/jquery.easing.1.3.js"></script>
<script src="js/kwicks/jquery.kwicks-1.5.1.pack.js"></script>
<script src="js/swfobject/swfobject.js"></script>
<!-- FancyBox -->
<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css" media="all">
<script src="js/fancybox/jquery.fancybox-1.2.1.js"></script>
</head>
<body>
        <?php
            include 'header.php';
        ?>
  <div id="container">
 
  <div class="one-half last">
    <div class="heading_bg">
      <h2>Registration Details</h2>
    </div>
      
        <?php
    
        $con=mysqli_connect("localhost","root","","users");
        if(!$con){
        echo 'connection error';
        }
        else {
                $sql="select * from register";
            $result=  mysqli_query($con, $sql);
            ?>
        <table border="2">
            <tr>
                <th>
                    Firstname
                </th>
                <th>
                    Lastname
                </th>
                <th>
                    Email
                </th>
                <th>
                    Password
                </th>
                <th>
                    Phone No.
                </th>
                <th>
                    Country
                </th>
                <th>
                    Gender
                </th>
                
            </tr>
        <?php
                    while ($row = mysqli_fetch_array($result)) {
                       ?>
            <tr>
                <td>
                    <?php
                               echo $row['Firstname'];
                    ?>
                </td>
                <td>
                    <?php
                               echo $row['Lastname'];
                    ?>
                </td>
                <td>
                    <?php
                               echo $row['Email'];
                    ?>
                </td>
                <td>
                    <?php
                               echo $row['Password'];
                    ?>
                </td>
                <td>
                    <?php
                               echo $row['Phoneno'];
                    ?>
                </td>
                <td>
                    <?php
                               echo $row['Country'];
                    ?>
                </td>
                <td>
                    <?php
                               echo $row['Gender'];
                    ?>
                </td>
            </tr>
            <?php
                    }
                    ?>
        </table>
        <?php
        }
        
        ?>
        <p>    
    </p>
  </div>
  <div style="clear:both; height: 40px"></div>
</div>
      
<!-- close container -->

<?php
    include 'footer.php';
?>

    </body>
 </html>