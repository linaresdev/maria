<?php
/*
 * Plugin Name:       SMTPMail
 * Plugin URI:        https://iipec.net
 * Description:       Envio de correo via smtp.
 * Version:           0.1
 * Author:            Ramon A Linares Febles
 * Author URI:        https://iipec.net/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       smtpmail
 * Domain Path:       /languages
*/

## Activate 
function smtpmail_activate(){
    require_once("activate.php");
}
register_activation_hook(__FILE__, "smtpmail_activate");

## Desinstall
function smtpmail_desactivate(){
    require_once("deactivate.php");
}
register_deactivation_hook(__FILE__, "smtpmail_desactivate");

## Menu administrativo

function add_admin_smtpmail_menu() {
    add_menu_page(
        "SMTP SERVER",
        "Smtp Server",
        "manage_options",
        "smtpmail/admin/form.php",
        '',
        plugin_dir_url(__FILE__)."admin/icon.png",
        '81'
    );
}

function MostrarContenido(){
    echo '<h1>Content Page</h1>';
}

add_action("admin_menu", "add_admin_smtpmail_menu");

// if( !function_exists("smtpmail") ) {

//     use PHPMailer\PHPMailer\PHPMailer;
//     use PHPMailer\PHPMailer\SMTP;
//     use PHPMailer\PHPMailer\Exception;

//     require 'vendor/autoload.php';

//     function smtpmail() {
//         $mail = new PHPMailer(true);
//     }
// }

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// require 'vendor/autoload.php';

// $mail = new PHPMailer(true);

// try {
//     //Server settings
//     #$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
//     $mail->isSMTP();                                            //Send using SMTP
//     $mail->Host       = "gator2127.hostgator.com";                     //Set the SMTP server to send through
//     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
//     $mail->Username   = 'info@iipec.net';                     //SMTP username
//     $mail->Password   = 'linaresfebles4381info';                               //SMTP password
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
//     $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//     //Recipients
//     $mail->setFrom('info@iipec.net', 'Mailer');
//     $mail->addAddress('rlinares4381@gmail.com', 'Joe Doe');     //Add a recipient
//     #$mail->addAddress('ellen@example.com');               //Name is optional
//     #$mail->addReplyTo('info@example.com', 'Information');
//     #$mail->addCC('cc@example.com');
//     #$mail->addBCC('bcc@example.com');

//     //Attachments
//    # $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//    # $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

//     //Content
//     $mail->isHTML(true);                                  //Set email format to HTML
//     $mail->Subject = 'Here is the subject';
//     $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }