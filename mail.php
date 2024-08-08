

<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';
if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["number"]) && !empty($_POST["lookingfor"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $number = $_POST['number'];


    $lookingfor = $_POST['lookingfor'];

    $mail = new PHPMailer();

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
   
    $mail->SMTPAuth = true;
    // $mail->SMTDebug = 2;
  
    $mail->Username = 'amruta11082001@gmail.com';   
       
    $mail->Password = 'zjnicbsysmytuowa';             
    // $mail->Password = 'rrszrthuxhdqbwfy';                                    
    
    $mail->SMTPSecure = "tls";
 
    $mail->Port = 587;
    $mail->From = "amruta11082001@gmail.com";
    $mail->FromName = "Landing Page";
      $mail->addAddress('amruta11082001@gmail.com');

    $mail->Subject = "Landing Page: ";
    $mail->Body = "<table><tr><td>Name : </td><td>" . $name . "</td></tr>" . "<tr><td>Email : </td><td>" . $email . "</td></tr>" . "<tr><td>Mobile Number : </td><td>" . $number . "</td></tr>" . "<tr><td>Details : </td><td>" . $lookingfor . "</td></tr></table>";
    $mail->AltBody = "Name: " . $name . ", Email: " . $email . ", Mobile Number: " . $number . ", Details: " . $lookingfor;
    if (!$mail->send()) {
       
        echo '<script type="text/javascript">alert("Something Went Wrong.");</script>';
    } else {
          
        echo "<script>location.replace('thank-you.php');</script>";
        exit();
    }
}