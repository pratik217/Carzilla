<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'header.php';
       session_start();
        if(isset($_SESSION['user'])){
                
                 $crt=$_SESSION['cart'];
                 $v=$_POST['t4'];
                 $w=$_POST['t5'];
                 $x=$_POST['t6'];
                 $y=$_POST['t7'];                     
             echo 'The items in your cart are:'. $v;
        }
        
    include 'footer.php';
        ?>
    </body>
</html>
