<?php

//function send(object $data){
    //$to = 'emaurilio@gmail.com';
    //$subject = $data->subject;
    //$message = $data->message;
   // $headers = "From: {$data->email}". "\r\n".
    //'Reply-to: emaurilio@alumni.usp.br'. "\r\n".
    //'X-Mailer: PHP/'.phpversion();

    //return mail($to,$subject,$message,$headers);

//}

function send(array $data){
    $email = new PHPMailer\PHPMailer\PHPMailer;
    $email->CharSet = 'UTF-8';
    $email->SMTPSecure = 'tls';
    $email->isSMTP();
    $email->Host = 'sandbox.smtp.mailtrap.io';
    $email->Port = 2525;
    $email->SMTPAuth = true;
    $email->Username = '4801b62b0be10e';
    $email->Password = '77dc2519915ff8';
    $email->isHTML(true);
    $email->setFrom('emaurilio@gmail.com');
    $email->FromName = $data['quem'];
    $email->addAddress($data['para']);
    $email->Body = $data['mensagem'];
    $email->Subject = $data['assunto'];
    $email->AltBody = 'Para ver esse email tenha certeza que';
    $email->MsgHTML($data['mensagem']);


    return $email->send();


}

