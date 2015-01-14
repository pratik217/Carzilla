<!DOCTYPE HTML>
<head>
<title>CarZilla | Used Cars</title>
<
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
  <div class="heading_bg">
      <h2>Used Cars</h2>
    </div>
      
        <?php
    
        $con=mysqli_connect("localhost","root","","users");
        if(!$con){
        echo 'connection error';
        }
        else {
                $sql="select * from sell";
            $result=  mysqli_query($con, $sql);
            ?>
    <form action="usedcars.php.php" class="TTWForm" method="post">
        <table border="2">
            <tr>
                <th>
                    Company Name
                </th>
                <th>
                    Model No.
                </th>
                <th>
                   Date of Purchase
                </th>
                <th>
                    Current Mileage
                </th>
                <th>
                   Selling Price
                </th>
               
            </tr>
        <?php
                    while ($row = mysqli_fetch_array($result)) {
                       ?>
            <tr>
                <td>
                    <?php
                               echo $row['Company'];
                    ?>
                </td>
                <td>
                    <?php
                               echo $row['Model'];
                    ?>
                </td>
                <td>
                    <?php
                               echo $row['Purchasedate'];
                    ?>
                </td>
                <td>
                    <?php
                               echo $row['Mileage'];
                    ?>
                </td>
                <td>
                    <?php
                               echo $row['Sellingprice'];
                    ?>
                </td>
                
            </tr>
            <?php
                    }
                    ?>
        </table>
      </form>
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
<!-- END footer -->
</body>
</html>