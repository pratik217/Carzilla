<!DOCTYPE HTML>
<head>
<title>CarZilla | FeedBack</title>
<meta charset="utf-8">
<!-- Google Fonts -->

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
      <!--<div class="one-half last">-->
    <div class="heading_bg">
  <h1>Contact Us</h1>
        <?php
        if(isset($_POST['s1'])) {
        $con=mysqli_connect("localhost","root","","users");
        if (!$con)
        {
            echo 'Database Connection Error';
        }
 else {
     
 
            $name=$_POST['name'];
            $tel=$_POST['tel'];
            $email=$_POST['email'];
            $msg=$_POST['message'];
            $res="insert into contactus value('$name','$tel','$email','$msg')";
            mysqli_query($con, $res);
            ?>
        
           <h1><?php echo 'Thanks for your Suggestion/Feedback......We will act on it Soon'; ?></h1>
           <?php
           
        //SMTP needs accurate times, and the PHP time zone MUST be set
        //This should be done in your php.ini, but this is how to do it if you don't have access to that
        date_default_timezone_set('Etc/UTC');

        require 'C:\wamp\www\Final\PHPMailerAutoload.php';

        //Create a new PHPMailer instance
        $mail = new PHPMailer();

        //Tell PHPMailer to use SMTP
        $mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
//$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "carzilla@rediffmail.com";

//Password to use for SMTP authentication
$mail->Password = "carnsp";

//Set who the message is to be sent from
$mail->setFrom('carzilla@rediffmail.com', 'CarZilla Support');

//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress($email, $name);

//Set the subject line
$mail->Subject = 'Received your feedback';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('C:\wamp\www\Final\contents.html'), dirname(__FILE__));

//Replace the plain text body with one created manually
$mail->AltBody = 'We have received your Feedback with email '.$email.'.Will act upon it soon!';

//Attach an image file
$mail->addAttachment('');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Check your mail for the confirmation of your feedback.";
}
 }
?>
    </div>              
    <div style="clear:both; height: 40px"></div>
</div>
  
<?php
    include 'footer.php';
 }
?>
</body>
</html>

    
