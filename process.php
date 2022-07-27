<?php 
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/mailer/vendor/autoload.php';

include_once('header.php') ;

// send message
if(isset($_POST['sendMail'])){
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
  $email = $_POST['email'];
  $body = addslashes($_POST['body']);

  date_default_timezone_set("Africa/Lagos");
  $time = date('H:i:s'); $date = date('Y-m-d');  $category = 'Inbox';
  $sname = 'SGR-Notify'; $sender = 'notification@sgr.com.ng'; $status =1;
  $rname = 'Abdul'; $receiver = 'abdul@sgr.com.ng';

  $process = $conn->query("INSERT INTO messages(sname, sender, rname, reciever, subject, body, category, status, date, time)
            VALUES('$name', '$email', '$rname', '$receiver', '$subject', '$body', '$category', '$status', '$date', '$time')") or die($conn->error);
  if ($process) {

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'mail.sgr.com.ng';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'notification@sgr.com.ng';                     //SMTP username
        $mail->Password   = '(notify@sgr)';                               //SMTP password
        $mail->SMTPSecure = 'ssl';                          //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        
        $mail->setFrom($sender, $sname);
        $mail->addAddress($receiver, $rname);     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional

        $mail->addReplyTo($email, $name); //reply mail


        // //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        $body = 
            '<div style="padding: 10px; width: 99%; background-color: #0d6efd; padding-bottom: 10px; color: #fff; margin-bottom: 10px;">
                <h1>Message Notification</h1>
            </div>
            <div class="body" style="padding: 10px; width: 100%; background-color: #fff; text-align: justify; border: 2px solid #f5f5f5; border-radius: 10px; padding-bottom: 30px; margin-bottom: 10px;">
                <h3>Dear Abdullahi </h3>
                <p>You have a new message :</p>
                <p><b>Subject :</b>'.$subject.'</p>
                <p><b>Name : </b>'.$name.'</p>
                <p><b>E-mail : </b>'.$email.'</p>
                <p style="text-align:justify;"><b>Messaage :</b>'.$body.'</p>
                <br>

            </div>
            <div class="footer" style="padding: 10px; width: 100%; background-color: #0d6efd; padding-bottom: 10px; color: #fff; font-weight:700;">
                <p>&copy; SGR '.date('Y').'<br></p>
            </div>';
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->AltBody = strip_tags($body);

        $mail->send();
        $_SESSION['msg'] = 'Message has been sent';
    } catch (Exception $e) {
      $_SESSION['msg'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    header("Location:contact");
  }else{
    $_SESSION['msg'] = 'There is a Problem, try again';
    header("Location:contact");
  }
}
