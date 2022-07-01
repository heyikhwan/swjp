<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{

    public function sendMail(Request $request)
    {
    $subject = $request->input('subject');
    $name = $request->input('name');
    $emailAddress = $request->input('email');
    $message = $request->input('message');

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        // Pengaturan Server
       // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail = new PHPMailer(); // create a new object
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPAuth = true; // authentication enabled
        $mail->Username = 'fadilmartias26@gmail.com';                 // SMTP username
        $mail->Password = 'poemmwddzehbkdkk';    
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // or 587                                // TCP port to connect to

        // Siapa yang mengirim email
        $mail->setFrom("zanofadil26@gmail.com", "SWJP");

        // Siapa yang akan menerima email
        $mail->addAddress('fadilmartias26@gmail.com');

        // ke siapa akan kita balas emailnya
        $mail->addReplyTo($emailAddress, $name);

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->AltBody = $message;

        $mail->send();
        return redirect()->back()->with('success', 'Terima kasih, kami sudah menerima email anda.');

    } catch (Exception $e) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }

}
}
