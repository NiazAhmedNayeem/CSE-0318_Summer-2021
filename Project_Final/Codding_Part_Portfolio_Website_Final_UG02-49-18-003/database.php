
<?php 

	include_once 'data.php';
                                                              
	$user =$_POST['user'];   
	$email=$_POST['email'];      
	$subject =$_POST['subject'];     
	$message =$_POST['message'];              


		$sql= "INSERT INTO messages(name,email,subject,message)
VALUES('$user','$email','$subject','$message');";
        
		mysqli_query($conn, $sql);

	header("Location: contact.html?message=success")

?>