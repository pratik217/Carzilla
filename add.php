<!DOCTYPE HTML>
<head>
<title>CarZilla | Add</title>
<meta charset="utf-8">


<!-- JS Files -->
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

<script src="js/fancybox/jquery.fancybox-1.2.1.js"></script>
</head>
<body>
<?php
    include 'header.php';
?>
        <div id="container">
  
  <div class="one-half last">
    <div class="heading_bg">
      <h2>Admin User Entry ..</h2>
    </div>
      
        
      <form name="formmy" class="TTWForm" method="post" action="add.php" onsubmit="return hh();">
            <div id="field1-container" class="field f_75">
          <label for="field1">First Name</label></br>
          <input type="text" name="t1" placeholder="First Name"></br>
      </div>
      <div id="field2-container" class="field f_75">
        <label for="field2">Last Name</label></br>
        <input type="text" name="t2" placeholder="Last Name"></br>
      </div>
      <div id="field5-container" class="field f_75">
        <label for="field5">Email</label></br>
        <input type="text" name="em" placeholder="Email"></br>
      </div>
            <div id="field5-container" class="field f_75">
        <label for="field5">Enter Password</label></br>
       <input type="password" name="pw" placeholder="Password"></br>
            </div>
                      <div id="field5-container" class="field f_75">
        <label for="field5">Confirm Password</label></br>
        <input type="password" name="pw1" onblur="return hh()" placeholder="Renter Password"></br>
      </div>
                      <div id="field5-container" class="field f_75">
        <label for="field5">Phone No.</label></br>
        <td> <input type="tel" name="ph" placeholder="Phone No."></td></br>
      </div>
                 <div id="field5-container" class="field f_75">
        <label for="field5">Select Country</label></br>
         <td> <select name="cont">
                        <option value="-1" selected> ...select...</option>
                    <option value="3">India</option>
                    <option value="1">Pakistan</option>
                    <option value="2">Nepal</option>
                    </select></td></br>
      </div>
   <div id="field5-container" class="field f_75">
       <label for="field5">Select Gender</label></br>
        <td><input type="radio" name="g1" value="1">Male
                <input type="radio" name="g1" value="2">Female</td></br>
      </div>
                <div id="field5-container" class="field f_75">

                        <input type="checkbox" name="cb" > I Agree With All Term's And Condition's
                    
                </div>
      
      <div id="form-submit" class="field f_46 clearfix submit">
        <input type="submit" name="sb" value="Register" onclick="return hh();">
      </div>
            
        </form>
        <?php
        if (isset($_POST['sb'])){
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