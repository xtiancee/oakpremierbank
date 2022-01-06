<?php

            @$mail = new Mail();
			$mail->setFrom(SITEEMAIL);
			$mail->FromName=('Oakpremierbank');
			$mail->addAddress($to);
			$mail->AddReplyTo=('info@oakpremierbank.com');
			$mail->subject($subject);

			if(isset($_FILES['attachment']['name'])) {
              $file = "attachment/". basename($_FILES['attachment']['name']);
            if(move_uploaded_file($_FILES['attachment']['tmp_name'], $file)) {
               $mail->addAttachment($file); 
            }
        }
			$mail->body($body);
			$mail->send();
?>