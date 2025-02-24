 <?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$role = $_POST['role'];
$message = $_POST['message'];
 
 $email_from = 'Tggcompanies.com';
 
 $email_role = 'New Form Submission';
 
 $email_body = "User Name: $name.\n";
                "User Email: $visitor_email.\n";
				"Role: $role.\n";
				"User Message: $message.\n"; 
				
	$to ='mensimaefua@gmail.com';
	
   $header = "Form: $email_form\r\n";

   $header = "Reply-To: $visitor_email\r\n";	
   
   mail($to, $email_role, $email_body, $header);
   
   header("Location: contact.html");
 ?>