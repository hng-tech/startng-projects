<?php
    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';

    if (isset($_POST['sub'])){
            
            // defining variables 
            $email_address = strip_tags(htmlspecialchars($_POST['email']));
                
            // Creating the email and sending the message
            $to = 'info@helpachildfoundation.org'; // This is where the form will send a message to.
            $email_subject = "Help A Child Foundation Contact Form:";
            $email_body = "Thank You for subscribing to our Newsletter! You will Receive more updates soon.\n\n Kind Regards.";
            $headers = "From: noreply@helpachildfoundation.org\n"; // This is the email address the generated message will be from.
            $headers .= "Reply-To:";   
            //create mail object
            $mail = new PHPMailer(true);
              try {
                  //Server settings
                  $mail->SMTPDebug = 2;                                       // Enable verbose debug output
                  $mail->isSMTP();                                            // Set mailer to use SMTP
                  $mail->Host       = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
                  $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                  $mail->Username   = 'helpachild24@gmail.com';              // SMTP username
                  $mail->Password   = 'help@child';                         // SMTP password
                  $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
                  $mail->Port       = 465;                                    // TCP port to connect to
                  //Recipients
                  $mail->setFrom('helpachild24@gmail.com', 'HelpAChild Foundation');
                  $mail->addReplyTo('helpachild24@gmail.com', 'HelpAChild Foundation');
                  $mail->AddAddress($email_address);
                  // Content
                  $mail->isHTML(true);                                  // Set email format to HTML
                  $mail->Subject = 'Message From HelpAChild Foundation';
                  $mail->Body    = 'Thank You for subscribing to our Newsletter! You will Receive more updates soon.\n\n Kind Regards.';
                  
                  //calling mail method
                  $mail->send();
              } catch (Exception $e) {
                  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                  die();
              }
              $_SESSION['msg'] = '<h1 class="intro">Thanks for subscribing to our Newsletter!</h1>';
            header ("location: index.php"); // returns back to contact page
          }
if (isset($_POST['contact'])) {
  # code...
  $name = strip_tags(htmlspecialchars($_POST['name']));
  $email = strip_tags(htmlspecialchars($_POST['email']));
  $message = strip_tags(htmlspecialchars($_POST['message']));

  $_SESSION['msg'] = '<h1 class="intro">Thank you '.$name.' for sending us a Message!</h1>';
  header('Location: index.php');
}
?>