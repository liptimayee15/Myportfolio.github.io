<?php 

require_once("config.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['save'])){
    $name=$_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $Created_date = date("Y-m-d");
    $insrt = mysqli_query($conn,"insert into information(name,email,mobile,subject,message) values ('$name','$email','$mobile','$subject','$message')");

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function


//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';



//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'liptimayee15@gmail.com';                     //SMTP username
    $mail->Password   = 'ziln jmcu ploq osye';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('liptimayee15@gmail.com', 'Sender');
    $mail->addAddress('hitlarsahoo1987@gmail.com', 'Job Aspirant');     //Add a recipient
    

    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "$subject";
    $mail->Body    = "Sender Name - $name <br> Sender Email-$email <br> Message - $message";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    if($insrt){
       $_SESSION['status']="Successfully Send Your Response";
       $_SESSION['status_code']="Success";
       header("location:index.php");
    }else{
        $_SESSION['status']="Data Not Send";
        $_SESSION['status_code']="error";
        header("location:index.php");

    }
}


?>
