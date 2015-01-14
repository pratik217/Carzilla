<html>
    <head>
        <title>
        TO DELETE THE LIST OF USERS FROM THE TABLE...
        </title>
    </head>
    <body>
        <?php
            include 'header.php';
        ?>
         <div id="container">
 
  
    <div class="heading_bg">
      <h2>Delete Page</h2>
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
        <?php
        }
        
        ?>


    <input name="del" type="submit" value="Delete">

</form>
            <?php
            if(isset($_POST['del']))
                {
            $sc1=$_POST['sc'];
            $i="delete from register where Firstname ='$sc1'";
           $e= mysqli_query($con, $i);
           echo 'Data Deleted From Database...';
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