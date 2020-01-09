 //incorporate this code into your registration 
 
 
 require_once('../phpmailer/PHPMailer/PHPMailerAutoload.php');

    $mail = new PHPMailer;

    $mail->SMTPDebug = 0;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'support@example.com';                 // SMTP username
    $mail->Password = 'examplepassword';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;          // TCP port to connect to



    $mail->SMTPOptions = array(
      'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
      )
      );

    $mail->setFrom('support@domainname.com', ' Preferred Name');
    $mail->addAddress($email) ;     // Add a recipient
    $mail->isHTML(true);    

    $mail->Subject = 'Account Activation / Email Verification';
    $mail->Body    =  "
      try{
        $mail->Send();
        echo '<script>alert("Account Created Successfully please verify Email to continue to Login.. Please check your spam also."); </script>' ;
     
    
      }catch (Exception $ex){
        $error = $ex->getMessage();
      }
    
    
    /*if(!$mail->send()) {
      //echo 'Message could not be sent.';
     // echo 'Mailer Error: ' . $mail->ErrorInfo;
     return 1;
       
    } else {
        
      //echo 'Message has been sent';
      return 0;
    }*/
    

     // echo '<script>alert("Account Created Successfully please verify Email to continue to Login.. Please check your spam also."); </script>' ;
    
    // $fname= $row["fname"];
    /*echo 'error occured try again';
    exit(); */
    }else{
        //echo "sign up not successful";
    echo '<script>alert("failed"); </script>' ;
   
     exit();
    }
  }
      } 
      
          }
 }
mysqli_close($conn);
