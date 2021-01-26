<?php 
//llamando a los campos
if (isset($_POST['enviar'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $consulta = $_POST['consulta'];

    // datos para el correo
    $destinatario ="mchavez202020@gmail.com";
    $asunto = "Contacto desde nuestra web";

    $carta = "De: $nombre" . " \r\n";
    $carta .= "Correo: $email" . " \r\n";
    $carta .= "Telefono: $celular" . " \r\n";
    $carta .= "Mensaje: $consulta" . " \r\n";
    $carta .= "X-Mailer: PHP/" . phpversion();

    //enviando mensaje

    $mail = @mail($destinatario, $asunto, $carta);

    if ($mail){
        echo " <h4> ¡ Email enviado exitosamente! </h4>";
    }


}


?>

