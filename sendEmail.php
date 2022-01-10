<?php 

    use PHPMailer\PHPMailer\PHPMailer;

    if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['service']) && isset($_POST['email']) && isset($_POST['body']) && isset($_POST['gdpr'])){
        $name = htmlspecialchars($_POST['name']);
        $phone = htmlspecialchars($_POST['phone']);
        $service = htmlspecialchars($_POST['service']);
        $email = htmlspecialchars($_POST['email']);
        $body = htmlspecialchars($_POST['body']);
        $gdpr = htmlspecialchars($_POST['gdpr']);

        if (preg_match("/^[a-zA-Z0-9]*[@][a-z0-9]{2,}[.][a-z]{2,3}$/", $email)) {
            
            require_once "PHPMailer/PHPMailer.php";
            require_once "PHPMailer/SMTP.php";
            require_once "PHPMailer/Exception.php";

            $mail = new PHPMailer();

            //smtp settings

            $mail->isSMTP();
            $mail->Host = "mail.greenutilitiesconsultancy.co.uk";
            $mail->SMTPAuth = true;
            $mail->Username = "info@greenutilitiesconsultancy.co.uk";
            $mail->Password = 'Wbla0iW#cTyq';
            $mail->Port = 25;
            $mail->SMTPSecure = "tls";

            //Email Settings
            $mail->isHTML(true);
            $mail->setFrom($email, $name);
            $mail->addAddress("info@greenutilitiesconsultancy.co.uk");
            $mail->Subject = ("$email, $service");
            $mail->Body = "<b>Phone: ".$phone ."</b><br><b style='color:blue'>Service: ".$service . "</b><br>".$body . "<br><br><span>".$gdpr . "</span><br>";

            if($mail->send()){
                $status = "success";
                $response = "Email is sent!";

            }
            else 
            {
                $status = "failed";
                $response = "Something is wrong: <br>" . $mail->ErrorInfo;

            }

            exit(json_encode(array("status" => $status, "response" => $response)));
        }
        else{
            echo "Invalid email";
        }


    }
    else{
       $status = "failed";
        $response = "Please Input All Data & Check It: <br>" . $mail->ErrorInfo; 
    }

?>