<?php
require 'vendor/autoload.php';

$conn = new mysqli("localhost", "root", "", "contact");

if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Adresse e-mail invalide.");
    }

    if (empty($name) || empty($message)) {
        die("Tous les champs doivent être remplis.");
    }

    $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);
    
    if ($stmt->execute()) {
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'motyxgaming@gmail.com'; 
        $mail->Password = 'xnre bmap qxzw gzhv'; 
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;


        $mail->setFrom($email, $name); 
        $mail->addAddress('motyxgaming@gmail.com'); 


        $mail->Subject = "Nouveau message de $name";
        $mail->Body    = "Nom : $name\nE-mail : $email\n\nMessage :\n$message";

  
        if ($mail->send()) {
            header("Location: merci.html"); 
            exit();
        } else {
            echo "Erreur lors de l'envoi du message : " . $mail->ErrorInfo;
        }
    } else {
        echo "Erreur lors de l'enregistrement du message.";
    }

    $stmt->close();
    $conn->close();
}
?>
