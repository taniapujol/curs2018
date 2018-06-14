<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Para comprobar si se recibe un post desde un ajax
if ($_SERVER['REQUEST_METHOD']==='POST'){
	//Para almacenar los datos JSON recibidos en una variable
	$request= file_get_contents('php://input');
	//Para convertir un Json en un array de php
    $datos = json_decode($request,true);    
    //Import PHPMailer classes into the global namespace
    require '../Util/PHPMailer/src/Exception.php';
    require '../Util/PHPMailer/src/PHPMailer.php';
    require '../Util/PHPMailer/src/SMTP.php';
    //Create a new PHPMailer instance
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = "ainatpujolrigual@gmail.com";     // SMTP username
        $mail->Password = "46963684";                         // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('from@example.com', 'Mailer');
        $mail->addAddress($datos['email'], $datos['user']);   // Add a recipient
        // $mail->addReplyTo('info@example.com', 'Information');
        
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Notificacion fin de Prestamo';
        $mail->Body    = '<h3>Le imformamos que ha vencido la fecha de disposición del prestamo:</h3><table style="border:2px solid black;"><thead style="background-color: #05054C;color:#fff"><tr><th><strong>Codigo de Prestamos</strong></th>
        <th><strong>Obra</strong></th><th><strong>Categoria</strong></th></tr></thead><tbody>
        <tr><td>'.$datos['id_prestamos'].'</td><td>'.$datos['obra'].'</td><td>'.$datos['cat'].'</td></tr></tbody></table>';

        $mail->send();
        $msg = true;
        // echo 'Message has been sent';
    } catch(Exception $e) {
        $msg = false;
        // echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
    if ($msg==true) {
        echo json_encode([
            'error' => 0 , 
            'result'=> "mesage enviado correctamente" 
        ]);
    } else {
       echo json_encode([
            'error' => 1 , 
            'result'=> "mesage no se pudo enviar. Mailer Error :". $mail->ErrorInfo 
        ]);
    }
}
?>