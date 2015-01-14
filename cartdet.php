<html>
    <head>
        <title>
            Carzilla | Cart checkout
        </title>
        <style>
            img:hover{
                 alignment-adjust: after-edge;
                 size: 600px;
                
            }
        </style>
    </head>
    <body>
<?php
    include 'header.php';
    $d=$_GET["id"];
    $a=$_GET["a"];
    $name=$_GET["name"];
    $price=$_GET["price"];
    if ($d==1)
    {
       ?>
        <div id="container">
            <div class="heading_bg">
                <h2>
                    <?php
                           echo $name;
                    ?>
                </h2>
            </div>
            <div class="one-half"> 
                <div style="length: 560px; width: 500px;">
            <img src=
                 <?php
                        echo  $a;
                 ?>
                 height="400px" width="400px">
                </div>
            </div>
            <div class="one-half last">
                <h2> Price</h2><br>
                    
                <h3>
                        <?php
                                         echo $price;
                        ?>
                </h3>
                <form action="buy.php?id=2&$d&$a&$name&$price" class="TTWForm" method="post">
                    <div id="form-submit">
                        <input value="Buy Now" type="submit">
                    </div>
                </form>
            </div>
            <div style="clear:both; height: 40px"></div>
        </div>
        
<?php
    }
    require 'footer.php';
?>
    </body>
</html>

