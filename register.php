<!DOCTYPE HTML>
<head>
<title>CarZilla | Register</title>
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
        <h2>Registration Form</h2>
    </div>
     <script type ="text/javascript">
    function hh()
    {
         if (document.login.t1.value==="")
        {
            alert("Please Provide your name !");
            document.login.t1.focus();
            return false;
        }
        if (document.login.t2.value==="")
        {
            alert("Please Provide your name !");
            document.login.t2.focus();
            return false;
        }
        var emailID=document.login.em.value;
        atpos=emailID.indexOf("@");
        dotpos=emailID.lastIndexOf(".");
        if(atpos<1||(dotpos-atpos<2))
        {
            alert("Please Enter Correct EmailId");
            document.login.em.focus();
            return false;
            }
        if (document.login.Cont.value==="-1")
        {
            alert("Please provide your Country");
            return false;
        }
        return (true);
    }
      
            </script>
            <script>
        function che()
            {
                var a=document.getElementById("pp").value;
                var b=document.getElementById("pp1").value;
                if(a===b)
                {
                    return true;
                }
                else
                {
                  alert("password do not match");
                  document.getElementById("pp").style.background="red";
                  document.getElementById("pp1").style.background="red";
                  return false;
                }
            }
    </script>
             <script>
        function nn()
        {
            if (document.login.ph.value===""||isNaN(document.login.ph.value)||document.login.ph.value.length!==11)    
        {
            alert("Please Provide a Valid Phone No.");
            document.login.ph.focus();
            return false;
        }
        return truue;
            }
    </script>
    <form name="login" onsubmit="return(validate());" action="reg.php" class="TTWForm" method="post">
      <div id="field1-container" class="field f_75">
          <label for="field1">First Name</label></br>
          <input type="text" name="t1" placeholder="First Name" ></br>
      </div>
      <div id="field2-container" class="field f_75">
        <label for="field2">Last Name</label></br>
        <input type="text" name="t2" placeholder="Last Name"></br>
      </div>
      <div id="field5-container" class="field f_75">
        <label for="field5">Email</label></br>
        <input type="text" name="em" placeholder="Email" onblur="return hh()"></br>
      </div>
            <div id="field5-container" class="field f_75">
        <label for="field5">Enter Password</label></br>
       <input type="password" name="pw" id="pp" placeholder="Password"></br>
            </div>
                      <div id="field5-container" class="field f_75">
        <label for="field5">Confirm Password</label></br>
        <input type="password" name="pw1" id="pp1" onblur="return che()" placeholder="Renter Password"></br>
      </div>
                      <div id="field5-container" class="field f_75">
        <label for="field5">Phone No.</label></br>
        <td> <input type="tel" name="ph" placeholder="Phone No." onblur="return nn()"></td></br>
      </div>
                 <div id="field5-container" class="field f_75">
        <label for="field5">Select Country</label></br>
         <td> <select name="cont">
                        <option value="-1" selected> ...select...</option>
                    <option value="1">India</option>
                    <option value="2">Pakistan</option>
                    <option value="3">Nepal</option>
                    <option value="4"> USA</option>
                    <option value="5"> Bangladesh</option>
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
  </div>
      <div class="one-halflast">
          <div class="heading_bg">
              </br></br>
              </br></br>
              <div id="slider3" class="nivoSlider" style="width: 450px; height: 400px"> <a href="#"><img title="CarZilla" src="img/demo/slide_14.jpg" alt="" width="450" height="400"></a><a href="#"><img title="CarZilla" src="img/demo/slide_25.jpg" alt="" width="450" height="400"></a><a href="#"><img title="CarZilla" src="img/demo/slide_21.jpg" alt="" width="450" height="400"></a><a href="#"><img title="CarZilla" src="img/demo/slide_16.jpg" alt="" width="450" height="400"></a> <a href="#"><img title="CarZilla" src="img/demo/slide_10.jpg" alt="" width="450" height="400"></a> </div>
    <div style="clear:both"></div>   
      </div>
      </div>
        <div style="clear:both; height: 40px"></div>
  </div>
    
  <?php
    include 'footer.php';
  ?>

      

</body>
</html>