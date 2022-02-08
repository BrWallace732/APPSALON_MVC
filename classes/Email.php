<?php
namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token){
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }
    public function enviarConfirmacion(){
        //crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'ab9d614aa3f380';
        $mail->Password = '8a6ef1dfcae09a';

        $mail->setFrom('cuentas@salonApp.com');
        $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
        $mail->Subject = 'confirma tu cuenta';

        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';

        $contenido =  "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> has creado tu cuenta en App salon, Solo debes confirmarla presionando el siguien enlace</p>";
        $contenido .= "<P>Presiona Aquí <a href='http://localhost:3000/confirmar-cuenta?token=". $this->token . "'>Confirmar Cuenta</a></P>";
        $contenido .= "</html>";
        $mail->Body = $contenido;

        //enviar email
        $mail->send();

    }

    public function enviarInstrucciones(){
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'ab9d614aa3f380';
        $mail->Password = '8a6ef1dfcae09a';

        $mail->setFrom('cuentas@salonApp.com');
        $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
        $mail->Subject = 'restablece tu password';

        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';

        $contenido =  "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has solicitaddo restablecer tu passord, sigue el siguiente enlace: </p>";
        $contenido .= "<P>Presiona Aquí <a href='http://localhost:3000/recuperar?token=". $this->token . "'>Restablecer Password</a></P>";
        $contenido .= "</html>";
        $mail->Body = $contenido;

        //enviar email
        $mail->send();
    }
}