<!DOCTYPE HTML>
<head>
<title>CarZilla | Sell Cars</title>
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
  <div class="one-half">
        <h2>Sell Your Car at India's #1 Auto Portal</h2>
        <ul>
        <li><span class="sprite-main Bullets MarginR5"></span>Fastest Way to Sell Car</li>
        <li><span class="sprite-main Bullets MarginR5"></span>Over 32 Lakh Used Car Searches Monthly</li>
        <li><span class="sprite-main Bullets MarginR5"></span>Over 1.7 Lakh Cars Sold Already!</li>
        <li><span class="sprite-main Bullets MarginR5"></span>100% Verified Buyers</li>
        <li><span class="sprite-main Bullets MarginR5"></span>Lowest Pricing</li>
        </ul>
        <p></p>
        Image of car:
        <input type="image" name="carimg">
        <?php
     if(isset($_POST['sub'])){
        if($_FILES["f1"]["error"]>0)
        {
            echo 'Error: '.$_FILES["f1"]["error"]."<br>";
        }
        else {
            move_uploaded_file($_FILES["f1"]["tmp_name"],"img/sell/".$_FILES["f1"]["name"]);
            
            
            ?>
  <img src=" <?php echo "img/sell/".$_FILES["f1"]["name"]; ?>" height="200" width="200" alt="not">
  
  <?php
            echo 'FILE HAS BEEN UPLOADED SUCCESSFULLY';
            
            
     }}
        ?>
  </div>
    <div class="one-half last">
       <form action="" method="post" enctype="multipart/form-data" >
        Upload a pic. of your car<input type="file" name="f1" /><br>
        <input type="submit" name="sub" value="Upload">                          
        </form>
        <p></p>
        Please mention full details of your car:-
        <form name="formmy" class="TTWForm" method="post" action="sell.php" onsubmit="return hh();">
            <div id="field1-container" class="field f_75">
          <label for="field1">Company Name</label></br>
          <input type="text" name="t1" </br>
      </div>
      <div id="field2-container" class="field f_75">
        <label for="field2">Model No.</label></br>
        <input type="text" name="t2" ></br>
      </div>
            <div id="field2-container" class="field f_75">
        <label for="field2">Date of Purchase</label></br>
        <input type="text" name="t3" ></br>
      </div>
            <div id="field2-container" class="field f_75">
        <label for="field2">Current Mileage</label></br>
        <input type="text" name="t4" ></br>
      </div>
            <div id="field2-container" class="field f_75">
        <label for="field2">Selling Price</label></br>
        <input type="text" name="t5" ></br>
      </div>
            <div id="form-submit" class="field f_46 clearfix submit">
        <input type="submit" name="sb" value="Submit" onclick="return hh();">
      </div>
        </form>
            <?php
        if (isset($_POST['sb'])){
        $t1=$_POST['t1'];
        $t2=$_POST['t2'];
        $t3=$_POST['t3'];
        $t4=$_POST['t4'];
        $t5=$_POST['t5'];
        $con=mysqli_connect("localhost","root","","users");
        if(!$con){
        echo 'connection error';
        }
        else {
        $s="insert into sell values('$t1','$t2','$t3','$t4','$t5')";
            $r=  mysqli_query($con, $s);
       $p=mysqli_affected_rows($con);
        if ($p>=1)
        {
            echo 'data inserted';
        }
 else {
            echo 'error inserting data......'.mysqli_error($con);
 }
        }}
        ?>
  
</div><div style="clear:both; height: 40px"></div>
</div>
<!-- close container -->
<?php
    include 'footer.php';
?>
<!-- END footer -->
</body>
</html>