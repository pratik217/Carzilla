<!DOCTYPE HTML>
<head>
<title>CarZilla | Contact Us</title>
<meta charset="utf-8">
<!-- Google Fonts -->

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
  <h1>Contact Us</h1>
  <script type ="text/javascript">
    function validate()
    {
     var emailID=document.login.field5.value;
        atpos=emailID.indexOf("@");
        dotpos=emailID.lastIndexOf(".");
        if(atpos<1||(dotpos-atpos<2))
        {
            alert("Please Enter Correct EmailId");
            document.login.field5.focus();
            return false;
            }
            return (true);
    }
    </script>
    <script>
        function nn()
        {
            if (document.login.tel.value===""||isNaN(document.login.tel.value)||document.login.tel.value.length!==11)    
        {
            alert("Please Provide a Valid Phone No.");
            document.login.tel.focus();
            return false;
        }
        return truue;
            }
    </script>
 
    
  <form name="login" onsubmit="return(validate());"action="feedback.php" class="TTWForm" method="post">
      <div id="field1-container" class="field f_50">
          <label for="field1">Name</label></br>
          <input name="name" id="field1" type="text"></br>
      </div>
      <div id="field2-container" class="field f_50">
        <label for="field2">Telephone</label></br>
        <input name="tel" id="field2" type="text" onblur="return nn()"></br>
      </div>
      <div id="field5-container" class="field f_50">
        <label for="field5">Email</label></br>
        <input name="email" id="field5" type="email" onblur="return validate()"></br>
      </div>
      <div id="field4-container" class="field f_100">
        <label for="field4">Message</label></br>
        <textarea rows="5" cols="20" name="message" id="field4"></textarea></br>
      </div>
      <div id="form-submit" class="field f_100 clearfix submit">
          <input name="s1" type="submit" class="button" value="Submit" >
       
      </div>
    </form>
    </div>
        </div>
        <div class="one-half last">
             <div class="heading_bg">
      <h2>Our Details</h2>
    </div>
            
            <p><strong>CarZilla</strong><br>
      India<br>
      <br>
      Tel: (+91) 99 88 77 66<br>
      mail: <b><u>carzilla@rediffmail.com</u></b> </p>
  <div id="slider3" class="nivoSlider" style="width: 450px; height: 400px"> <a href="#"><img title="CarZilla" src="img/demo/slide_14.jpg" alt="" width="450" height="400"></a><a href="#"><img title="CarZilla" src="img/demo/slide_25.jpg" alt="" width="450" height="400"></a><a href="#"><img title="CarZilla" src="img/demo/slide_21.jpg" alt="" width="450" height="400"></a><a href="#"><img title="CarZilla" src="img/demo/slide_16.jpg" alt="" width="450" height="400"></a> <a href="#"><img title="CarZilla" src="img/demo/slide_10.jpg" alt="" width="450" height="400"></a> </div>
    <div style="clear:both"></div> 
            
        </div>
    <div style="clear:both; height: 40px"></div>
</div>
  
<?php
    include 'footer.php';
?>
<!-- END footer -->
</body>
</html>