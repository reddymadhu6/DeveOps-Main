<?php

    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $msg=$_POST['msg'];

    $conn = new mysqli('localhost','root','','users');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact(fname, email, subject, msg) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $fname, $email, $subject,$msg);
		$execval = $stmt->execute();
		// echo $execval;
		// echo "Registration successfully...";
		$stmt->close();
		$conn->close();
        if ($execval) {
            echo "Registration successful...";
        } else {
            echo "Registration failed. Please try again.";
        }
	}
    
	




?>