<!DOCTYPE HTML>
<head>
<title>CarZilla | Login Page</title>
<meta charset="utf-8">
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>
<!-- CSS Files -->
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="boxes/css/style6.css">
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
<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css" media="all">
<script src="js/fancybox/jquery.fancybox-1.2.1.js"></script>
</head>
<body>
<?php
include 'header.php';
?>
<div id="container">
  
<div class="one-half">
    <div class="heading_bg">
      <h2>Login Form</h2>
    </div>
    <script type ="text/javascript">
    function validate()
    {
     var emailID=document.login.t1.value;
        atpos=emailID.indexOf("@");
        dotpos=emailID.lastIndexOf(".");
        if(atpos<1||(dotpos-atpos<2))
        {
            alert("Please Enter Correct EmailId");
            document.login.t1.focus();
            return false;
            }
            return (true);
    }
    </script>
    
      
<form name="login" onsubmit="return(validate());"action="login.php" class="TTWForm" method="post" name="adminlog" on submit="return hh();">
    <div id="field5-container" class="field f_75">
        <label for="field5">Email Address</label></br>
        <input type="text" name="t1" id="t1"></br>
      </div>
            <div id="field5-container" class="field f_75">
        <label for="field5">Enter Password</label></br>
       <input type="password" name="t2" id="t2"></br>
            </div>
     <div id="form-submit" class="field f_46 clearfix submit">
         <input type="submit" name="nm" value="Login" onclick="return validate();"><br>
      </div>
    <div id="field5-container" class="field f_75">

        <label>
            <a href="register.php">Create An Account</a>
        </label>
                    
                </div>
            
            
           
        </form>

  </div>
    <div class="one-half last">
             <div class="heading_bg">
              </br></br>
              
    <div id="slider3" class="nivoSlider" style="width: 450px; height: 400px"> <a href="#"><img title="CarZilla" src="img/demo/slide_14.jpg" alt="" width="450" height="400"></a><a href="#"><img title="CarZilla" src="img/demo/slide_25.jpg" alt="" width="450" height="400"></a><a href="#"><img title="CarZilla" src="img/demo/slide_21.jpg" alt="" width="450" height="400"></a><a href="#"><img title="CarZilla" src="img/demo/slide_16.jpg" alt="" width="450" height="400"></a> <a href="#"><img title="CarZilla" src="img/demo/slide_10.jpg" alt="" width="450" height="400"></a> </div>
    <div style="clear:both"></div> 
    </div>
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