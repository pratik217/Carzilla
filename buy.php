<!DOCTYPE HTML>
<head>
<title>CarZilla | Buy A Car </title>



</head>
<body>
    <?php
        include 'header.php';
    ?>


<div id="container">
    <div class="heading_bg">
      <h2>Login Form</h2>
    </div>
    <script type ="text/javascript">
    function hh()
    {
         if (document.login.fn.value==="")
        {
            alert("Please Provide your name !");
            document.login.fn.focus();
            return false;
        }
        if (document.login.ad.value==="")
        {
            alert("Please Provide your name !");
            document.login.ad.focus();
            return false;
        }
         if (document.login.pin.value===""||isNaN(document.login.pin.value)||document.login.pin.value.length!==6)    
        {
            alert("Please Provide a Valid Phone No.");
            document.login.pin.focus();
            return false;
        }
      
       
        return (true);
    }
      
            </script>

             <script>
        function nn()
        {
            if (document.login.mob.value===""||isNaN(document.login.mob.value)||document.login.mob.value.length!==11)    
        {
            alert("Please Provide a Valid Phone No.");
            document.login.mob.focus();
            return false;
        }
        return truue;
            }
    </script>
      <!--<div class="one-half last">-->
      <?php
        if(isset($_SESSION["user"]))
        {
            
        
      ?>
    <div class="heading_bg">
  <h1>Enter Your Details</h1>
 
    
  <form name="login" onsubmit="return(validate());" action="last.php" class="TTWForm" method="post">
      <div id="field1-container" class="field f_50">
          <label for="field1">Full Name *</label></br>
          <input name="fn" id="field1" type="text"></br>
      </div>
        <div id="field2-container" class="field f_50">
        <label for="field2">Mobile No. *</label></br>
        <input name="mob" id="field2" type="text" onblur="return nn()"></br>
      </div>
      <div id="field2-container" class="field f_50">
        <label for="field2">Alternate Phone</label></br>
        <input name="mob2" id="field2" type="text"></br>
      </div>
      <div id="field5-container" class="field f_50">
        <label for="field5">Pincode *</label></br>
        <input name="pin" id="field5" type="text"></br>
      </div>
      <div id="field4-container" class="field f_100">
        <label for="field4">Address *</label></br>
        <textarea rows="5" cols="15" name="ad" id="field4"></textarea></br>
      </div>
        <div id="field5-container" class="field f_50">
        <label for="field5">City *</label></br>
        <input name="ci" id="field5" type="text"></br>
      </div>
        <div id="field5-container" class="field f_50">
        <label for="field5">State/Region *</label></br>
        <input name="st" id="field5" type="text"></br>
      </div>
        
      <div id="form-submit" class="field f_100 clearfix submit">
        <input value="Submit" type="submit" onclick="return hh();">
      </div>
        <div id="field5-container" class="field f_50">
        <label for="field5">* Required Field</label>
       
      </div>
            
    </form>
  
  </div>
 <?php
        }
        
      
 else {
     ?>
      <h3>
          Please login to Buy This Item
      </h3>
      <form action="adminlog.php" class="TTWForm" method="post">
       <div id="form-submit" class="field f_100 clearfix submit">
        <input value="login" type="submit">
      </div>
          
      </form>
      <form action="register.php" class="TTWForm" method="post">
       <div id="form-submit" class="field f_100 clearfix submit">
        <input value="Register" type="submit">
      </div>
          
      </form>
          <?php
 }
 ?>
      
    <div style="clear:both; height: 40px"></div>
</div>
  
<?php
    include 'footer.php';
?>
<!-- END footer -->
</body>
</html>