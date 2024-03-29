



<?php 





    session_start();
    
    var_dump($_REQUEST);

    $contacts = isset($_SESSION['contacts'])  ?  $_SESSION['contacts'] : [] ;
    $target_dir = "uploads/";
    $image = $target_dir.'avatar.png';

    if(!empty($_FILES['image'])) {
        if($_FILES['image']["type"] === 'image/png' || $_FILES['image']["type"] === 'image/jpg') {
            if($_FILES['image']["size"] < 400000) {
                if(is_uploaded_file($_FILES['image']["tmp_name"]) && $_FILES['image']["error"] === UPLOAD_ERR_OK) {
                    if(move_uploaded_file($_FILES['image']["tmp_name"], $target_dir.$_REQUEST['firstname'].'-'.$_REQUEST['lastname'])) {
                        $image = $target_dir.$_REQUEST['firstname'].'-'.$_REQUEST['lastname'];
                        echo 'Caricamento avvenuto con successo';
                    } else {
                        echo 'Errore!!!';
                    }
                }
            } else {
                echo 'FileSize troppo grande';
            }
        } else {
            echo 'FileType non supportato';
        }
    }

    // fare i controlli di validazione dei campi
  

    $firstname = strlen(trim(htmlspecialchars($_REQUEST['firstname']))) > 2 ? trim(htmlspecialchars($_REQUEST['firstname'])) : exit();
    $lastname = strlen(trim(htmlspecialchars($_REQUEST['lastname']))) > 2 ? trim(htmlspecialchars($_REQUEST['lastname'])) : exit();
    $city = strlen(trim(htmlspecialchars($_REQUEST['city']))) > 2 ? trim(htmlspecialchars($_REQUEST['city'])) : exit();
    $phone = htmlspecialchars($_REQUEST['phone']) ;
    $email =  htmlspecialchars($_REQUEST['email']);
    $password =  htmlspecialchars($_REQUEST['password']) ;

    $contact = [
        'Firstname' => $firstname, 
        'Lastname' => $lastname, 
        'City' => $city, 
        'Phone' => $phone,  
        'Email' => $email,
        'Password' => $password,
        'Image' => $image
    ];

    $_SESSION['contacts'] = [...$contacts, $contact];

    session_write_close();

    

    // Invia una mail di conferma

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    //Create an instance; 
    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'sandbox.smtp.mailtrap.io';             //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'e3d7d37f62a4ea';                       //SMTP username
        $mail->Password   = '6760ef448d045d';                       //SMTP password
        $mail->Port       = 2525;                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


        //Recipients
        $mail->setFrom('admin@example.com', 'Mario Rossi');
        $mail->addAddress($email, $firstname . ' ' . $lastname);     //Add a recipient
        $mail->addReplyTo('admin@example.com', 'Information');

        //Attachments
        $mail->addAttachment($image);    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Grazie per esserti Registrato sul nostro sito';
        $mail->Body    = '<h1>Grazie!!!!</h1><p>Ti aspettiamo sulla nostra rubrica</p>';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    
 //COMUNICO CON IL DATABASE

    require_once 'config.php';
//var_dump($config);

$mysqli = new mysqli(
                    $config['mysql_host'],
                    $config['mysql_user'],
                    $config['mysql_password']);

if($mysqli->connect_error) { die($mysqli->connect_error); } 
# else { var_dump($mysqli);}

$sql = 'CREATE DATABASE IF NOT EXISTS ESERCIZIO;';
if(!$mysqli->query($sql)) { die($mysqli->connect_error); }


// Seleziono il DB
$sql = 'USE ESERCIZIO;';
$mysqli->query($sql);


$sql = 'CREATE TABLE IF NOT EXISTS utenti ( 
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL, 
    age INT UNSIGNED NOT NULL, 
    email VARCHAR(100) NOT NULL UNIQUE ,
    city  VARCHAR (100) NOT NULL ,
    phone VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
)';
if(!$mysqli->query($sql)) { die($mysqli->connect_error); }








    
     $sql = "INSERT INTO `utenti` ( `name`, `age`, `email`, `city`, `phone`, `password`) VALUES ( '$firstname ', '45', '$email', '$city ', '$phone', '$password')";
    if(!$mysqli->query($sql)) { echo($mysqli->connect_error); }
    else { echo 'Record aggiunto con successo!!!';}


     



    
    

?>