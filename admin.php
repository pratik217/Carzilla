<!DOCTYPE HTML>
<head>
<title>CarZilla | Hello Admin</title>
<meta charset="utf-8">
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>
<!-- CSS Files -->
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen">
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
  
  <div class="one-half last">
    <div class="heading_bg">
      <h2>Welcome Admin..</h2>
    </div>
      <p></p>
                    
        
        <form action="add.php" method="post">
            <input type="submit" value="Add"></form>
            
            <form action="delete.php" method="post">
                <input type="submit" value="Delete"></form>
        
        <form action="view.php" method="post">
            <input type="submit" value="View"></form>
        
        <form action="update.php" method="post">
            <input type="submit" value="Update"></form>
                    
        </div>
  <div style="clear:both; height: 40px"></div>
</div>

  <?php
    include 'footer.php';
?>
<!-- END footer -->
</body>
</html>