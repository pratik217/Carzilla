<!DOCTYPE HTML>
<head>
<title>CarZilla | Cars</title>
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
  
  <div id="portfolio">
    <ul id="filterable">
      <li class="first">
        <h5>Sort by:</h5>
      </li>
      <li class="current"><a class="all" href="#all">All</a></li>
      <li><a class="fe" href="#BMW">Ferrari</a></li>
  
      <li><a class="ko" href="#Audi">Koiengsegg</a></li>
      <li><a class="ma" href="#Jaguar">Maserati</a></li>
      <li><a class="po" href="#Hundai">Porsche</a></li>
      <li><a class="vo" href="#Maruti Suzuki">Volkswagen</a></li>
      <li><a class="lm" href="#Toyota">Lamborgini</a></li>
      <li><a class="sk" href="#Ford">Skoda</a></li>
      <li><a class="be" href="#Chevrolet">Bentley</a></li>
      <li><a class="am" href="#Chevrolet">Aston Martin</a></li>
    </ul>
    <!--END filtering-nav-->
    <div class="portfolio-container" id="columns">
      <ul>
        <li class="one-fourth fe">
          <p> <a title="Audi Q3 " href="img/demo/slide_1.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-01.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <a href="cartdet.php?id=1&a=img/portfolio/portfolio-img-01.jpg&name=Audi Q3 &price= Rs 25.35 - 31.51 lakhs">Audi Q3</a>
          <div class="carDescContainerRt">
                    <div class="imgBorder padding10">
                        <div id="divModelDesc">
                            <div>
                                 <div class="textBlock"><span class="fontblack">Price: <span class="cw-sprite rupee-medium"></span>Rs 25.35 - 31.51 lakhs</span></div>
                                <div class="ex-showroom">Ex-showroom, New Delhi</div>
                            </div>
                        </li>
        
        <li class="one-fourth ko">
          <p> <a title="Ford Fiesta" href="img/demo/slide_3.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-03.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <h4><a href="cartdet.php?id=1&a=img/portfolio/portfolio-img-03.jpg&name=Ford Fiesta &price= Rs 25.35 - 31.51 lakhs">Ford Fiesta</a></h4>
          <div class="carDescContainerRt">
                    <div class="imgBorder padding10">
                        <div id="divModelDesc">
                            <div>
                                 <div class="textBlock"><span class="fontblack">Price: <span class="cw-sprite rupee-medium"></span>Rs 25.35 - 31.51 lakhs</span></div>
                                <div class="ex-showroom">Ex-showroom, New Delhi</div>
                            </div>
        </li>
        <li class="one-fourth po">
          <p> <a title="Chevrolet Beat" href="img/demo/slide_4.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-04.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <h4><a href="cartdet.php?id=1&a=img/portfolio/portfolio-img-04.jpg&name=Chevrolet Beat &price= Rs 25.35 - 31.51 lakhs">Chevrolet Beat</a></h4>
         <div class="carDescContainerRt">
                    <div class="imgBorder padding10">
                        <div id="divModelDesc">
                            <div>
                                 <div class="textBlock"><span class="fontblack">Price: <span class="cw-sprite rupee-medium"></span>Rs 25.35 - 31.51 lakhs</span></div>
                                <div class="ex-showroom">Ex-showroom, New Delhi</div>
                            </div>
        </li>
        <li class="one-fourth vo">
          <p> <a title="Chevrolet Cruze" href="img/demo/slide_5.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-05.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <h4><a href="cartdet.php?id=1&a=img/portfolio/portfolio-img-05.jpg&name=Chevrolet Cruze &price= Rs 25.35 - 31.51 lakhs">Chevrolet Cruze</a></h4>
          <div class="carDescContainerRt">
                    <div class="imgBorder padding10">
                        <div id="divModelDesc">
                            <div>
                                 <div class="textBlock"><span class="fontblack">Price: <span class="cw-sprite rupee-medium"></span>Rs 25.35 - 31.51 lakhs</span></div>
                                <div class="ex-showroom">Ex-showroom, New Delhi</div>
                            </div>
        </li>
        <li class="one-fourth ma">
          <p> <a title="Hundai Elantra" href="img/demo/slide_6.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-06.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <h4><a href="cartdet.php?id=1&a=img/portfolio/portfolio-img-06.jpg&name=Hundai Elantra &price= Rs 25.35 - 31.51 lakhs">Hundai Elantra</a></h4>
<div class="carDescContainerRt">
                    <div class="imgBorder padding10">
                        <div id="divModelDesc">
                            <div>
                                 <div class="textBlock"><span class="fontblack">Price: <span class="cw-sprite rupee-medium"></span>Rs 25.35 - 31.51 lakhs</span></div>
                                <div class="ex-showroom">Ex-showroom, New Delhi</div>
                            </div>
        </li>
        <li class="one-fourth lm">
          <p> <a title="" href="img/demo/slide_2.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-01.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <h4><a href="cartdet.php?id=1&a=img/portfolio/portfolio-img-01.jpg&name=Magento Development &price= Rs 25.35 - 31.51 lakhs">Magento Development</a></h4>
          <div class="carDescContainerRt">
                    <div class="imgBorder padding10">
                        <div id="divModelDesc">
                            <div>
                                 <div class="textBlock"><span class="fontblack">Price: <span class="cw-sprite rupee-medium"></span>Rs 25.35 - 31.51 lakhs</span></div>
                                <div class="ex-showroom">Ex-showroom, New Delhi</div>
                            </div>
        </li>
        <li class="one-fourth sk">
          <p> <a title="" href="img/demo/slide_2.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-01.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <h4><a href="cartdet.php?id=1&a=img/portfolio/portfolio-img-01.jpg&name=Joomla Shopping &price= Rs 25.35 - 31.51 lakhs">Joomla Shopping</a></h4>
          <div class="carDescContainerRt">
                    <div class="imgBorder padding10">
                        <div id="divModelDesc">
                            <div>
                                 <div class="textBlock"><span class="fontblack">Price: <span class="cw-sprite rupee-medium"></span>Rs 25.35 - 31.51 lakhs</span></div>
                                <div class="ex-showroom">Ex-showroom, New Delhi</div>
                            </div>
        </li>
        <li class="one-fourth be">
          <p> <a title="" href="img/demo/slide_2.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-01.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <h4><a href="cartdet.php?id=1&a=img/portfolio/portfolio-img-01.jpg&name=T-Shirts Designs &price= Rs 25.35 - 31.51 lakhs">T-Shirts Designs</a></h4>
          <div class="carDescContainerRt">
                    <div class="imgBorder padding10">
                        <div id="divModelDesc">
                            <div>
                                 <div class="textBlock"><span class="fontblack">Price: <span class="cw-sprite rupee-medium"></span>Rs 25.35 - 31.51 lakhs</span></div>
                                <div class="ex-showroom">Ex-showroom, New Delhi</div>
                            </div>
        </li>
        <li class="one-fourth am">
          <p> <a title="" href="img/demo/slide_2.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-01.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <h4><a href="cartdet.php?id=1&a=img/portfolio/portfolio-img-01.jpg&name=Youtube Video &price= Rs 25.35 - 31.51 lakhs">Youtube Video</a></h4>
          <div class="carDescContainerRt">
                    <div class="imgBorder padding10">
                        <div id="divModelDesc">
                            <div>
                                 <div class="textBlock"><span class="fontblack">Price: <span class="cw-sprite rupee-medium"></span>Rs 25.35 - 31.51 lakhs</span></div>
                                <div class="ex-showroom">Ex-showroom, New Delhi</div>
                            </div>
        </li>
        <li class="one-fourth branding">
          <p> <a title="" href="img/demo/slide_2.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-01.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <h4><a href="cartdet.php?id=1&a=img/portfolio/portfolio-img-01.jpg&name=Brand Everything &price= Rs 25.35 - 31.51 lakhs">Brand Everything</a></h4>
          <div class="carDescContainerRt">
                    <div class="imgBorder padding10">
                        <div id="divModelDesc">
                            <div>
                                 <div class="textBlock"><span class="fontblack">Price: <span class="cw-sprite rupee-medium"></span>Rs 25.35 - 31.51 lakhs</span></div>
                                <div class="ex-showroom">Ex-showroom, New Delhi</div>
                            </div>
                        </li>
        <li class="one-fourth video">
          <p> <a title="" href="img/demo/slide_2.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-01.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <h4><a href="cartdet.php?id=1&a=img/portfolio/portfolio-img-01.jpg&name=Another Video &price= Rs 25.35 - 31.51 lakhs">Another Video</a></h4>
          <div class="carDescContainerRt">
                    <div class="imgBorder padding10">
                        <div id="divModelDesc">
                            <div>
                                 <div class="textBlock"><span class="fontblack">Price: <span class="cw-sprite rupee-medium"></span>Rs 25.35 - 31.51 lakhs</span></div>
                                <div class="ex-showroom">Ex-showroom, New Delhi</div>
                            </div>
        </li>
        </ul><p></p>
        <a href="bybrand1.html">More Brands >>></a>
      <!--END ul-->
    </div>
    <!--END portfolio-wrap-->
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