<!DOCTYPE HTML>
<head>
<title>CarZilla</title>
<meta charset="utf-8">
<!-- Google Fonts -->

<!-- JS Files -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="js/jquery.tools.min.js"></script>
<script>
$(function () {
    $("#prod_nav ul").tabs("#panes > div", {
        effect: 'fade',
        fadeOutSpeed: 400
    });
});
</script>
<script>
$(document).ready(function () {
    $(".pane-list li").click(function () {
        window.location = $(this).find("a").attr("href");
        return false;
    });
});
</script>
</head>
<body>
    <?php
        include 'header.php';
    ?>

<div id="container">
  <!-- tab panes -->
  <div id="prod_wrapper">
    <div id="panes">
      <div> <img src="img/demo/1.jpg" alt="">
          <h2>Maruti Suzuki</h2>
        <p>If you have travelled in India, taken a route to anywhere around this great nation, chances are you’ve driven with us. For over three decades now, Maruti Suzuki cars have been going places.If you have travelled in India, taken a route to anywhere around this great nation, chances are you’ve driven with us. For over three decades now, Maruti Suzuki cars have been going places. </p>
        <p style="text-align:right; margin-right: 16px"><a  href="bybrand.php" class="button">Buy Now</a></p>
      </div>
      <div> <img src="img/demo/2.jpg" alt="">
        <h2>BMW</h2>
        <p>BMW Financial Services is dedicated to giving BMW customers the type of products and professional, efficient service needed to make the transition from showroom to highway both pleasant and memorable.</P><p>BMW Financial Services is here to help you drive away in your dream BMW.</p><p> After all, no one wants to see you drive a BMW more than we do.</p>
        <p style="text-align:right; margin-right: 16px"><a href="bybrand.php"  class="button">Buy Now</a></p>
      </div>
      <div> <img src="img/demo/3.jpg" alt="">
        <h2>Audi</h2>
        <p>The Audi India strategy encompasses significant investments in branding, marketing, exclusive dealerships and after sales service for the upcoming years.</p><p>At present Audi is assembling the Audi A6, Audi A4, Audi Q3, Audi Q5 and Audi Q7 for the Indian market in Aurangabad.</p>
        <p style="text-align:right; margin-right: 16px"><a  href="bybrand.php" class="button">Buy Now</a></p>
      </div>
      <div> <img src="img/demo/4.png" alt="">
        <h2>Honda</h2>
        <p>Honda Cars India Ltd., (HCIL) is a leading manufacturer of premium cars in India. The company was established in 1995 with a commitment to provide Honda’s latest passenger car models and technologies, to the Indian customers. The company is a subsidiary of Honda Motor Co. Ltd., Japan.  </p>
        <p style="text-align:right; margin-right: 16px"><a  href="bybrand.php" class="button">Buy Now</a></p>
      </div>
      <div> <img src="img/demo/5.jpg" alt="">
        <h2>Hyundai</h2>
        <p>Hyundai Motor India Limited (HMIL) is a wholly owned subsidiary of Hyundai Motor Company (HMC). HMIL is the largest passenger car exporter and the second largest car manufacturer in India. It currently markets ten car models across segments - in the A2 segment it has the Eon, Santro, i10, Grand, Xcent and the i20, in the A3 segment the Verna, in the A4 segment the Elantra, in the A5 segment Sonata and in the SUV segment the Santa Fe.</p>
        <p style="text-align:right; margin-right: 16px"><a  href="bybrand.php" class="button">Buy Now</a></p>
      </div>
    </div>
    <!-- END tab panes -->
    <br clear="all">
    <!-- navigator -->
    <div id="prod_nav">
      <ul>
        <li><a href="#1"><img src="img/demo/1.jpg" width="160" alt=""><strong>Maruti Suzuki</strong>       </a></li>
        <li><a class="bmw" href="bybrand.html"><img src="img/demo/2.jpg" width="160" alt=""><strong>BMW</strong>      </a></li>
        <li><a href="#3"><img src="img/demo/3.jpg" width="160" alt=""><strong>Audi</strong>        </a></li>
        <li><a href="#4"><img src="img/demo/4.png" width="160" alt=""><strong>Honda</strong>         </a></li>
        <li><a href="#5"><img src="img/demo/5.jpg" width="160" alt=""><strong>Hyundai</strong>         </a></li>
      </ul>
    </div>
    <!-- END navigator -->
  </div>
  <!-- END prod wrapper -->
  
  
   
  </div>
  <div style="clear:both; height: 40px"></div>
<!-- END container -->
<?php
    include 'footer.php';
  ?>
<!-- END footer -->
</body>
</html>