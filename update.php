<html>
    <head>
        <title>
        TO update THE LIST OF USERS FROM THE TABLE...
        </title>
    </head>
    <body>
        <?php
            include 'header.php';
        ?>
         <div id="container">
 
  
    <div class="heading_bg">
      <h2>Update Page</h2>
    </div>
        Select the Username to be Deleted:
        
        <?php
        $con=mysqli_connect("localhost","root","","users");
        if(!$con){
        echo 'connection error';
        }
        else {
                $sql="select * from register";
            $result=  mysqli_query($con, $sql);
            ?>
        
<form action="#" method="post">
         <select name="sc">
            
            <option> .select.</option>
            <?php
        while($r=mysqli_fetch_array($result))
        {
        ?>
            <option>
                <?php
                echo $r["Firstname"];
                ?>
            </option>
            <?php
            }
            ?>
        </select>
            <select name="sc2">
            
            <option> .select.</option>
            <?php
        while($r=mysqli_fetch_array($result))
        {
        ?>
            <option>
                <?php
                echo $r["coloumns"];
                ?>
            </option>
            <?php
            }
            ?>
        </select>
        <?php
        }
        
        ?>


    <input name="del" type="submit" value="Delete">

</form>
            <?php
            if(isset($_POST['del']))
                {
       
            $sc1=$_POST['sc'];
            $sc2=$_POST['sc2'];
            $i="update register set ='$sc2' where Username='$sc1'";
           
           $e= mysqli_query($con, $i);

           
           echo 'Data Updated From Database...';
                                                                                                                                                                                                                                                                                                                                                    

                }

?>
<p align=right><a href="view.php">VIEW RECORDS</a></p>
<p align=right><a href="admin.php">HOME</a></p>
 
              <div style="clear:both; height: 40px"></div>
         </div>
<?php
    include 'footer.php';
?>
    </body>
</html>