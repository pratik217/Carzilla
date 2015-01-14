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
     
        if($_FILES["f1"]["error"]>0)
        {
            echo 'Error: '.$_FILES["f1"]["error"]."<br>";
        }
        else {
            move_uploaded_file($_FILES["f1"]["tmp_name"],"img/sell/".$_FILES["f1"]["name"]);
           // echo 'FILE HAS BEEN UPLOADED SUCCESSFULLY';
            
            
        }
        ?>
    </body>
</html>
