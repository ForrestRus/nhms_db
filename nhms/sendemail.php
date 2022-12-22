<?php 
    //require 'vendor/autoload.php';

    class SendEmail{

        public static function SendMail($to,$subject,$content){
            $key = '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';

            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("forrestshellyann@gmail.com", "Rushelle Forrest");
            $email->setSubject($subject);
            $email->addTo($to);
            $email->addContent("text/plain", $content);
            //$email->addContent("text/html", $content);

            $sendgrid = new \SendGrid($key);

            try{
                $response = $sendgrid->send($email);
                return $response;
            }catch(Exception $e){
                echo 'Email exception Caught : '. $e->getMessage() ."\n";
                return false;
            }
        }
    }
?>