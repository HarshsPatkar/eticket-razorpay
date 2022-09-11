<?php
$conn = new mysqli('localhost','root','','eticket'); // Connection to Database

if (isset($_POST['pay_id']) && isset($_POST['email']) && isset($_POST['name']) && isset($_POST['number'])) { // Check if variables are set
	
	$pay_id = $_POST['pay_id'];
	$email = $_POST['email'];
	$name = $_POST['name'];
	$number = $_POST['number'];
	$gender = $_POST['gender'];	
	$amount = $_POST['amount'];
	$people = $amount;
	$amount_new = $amount*25;
}
	$query ="INSERT INTO razorpay(name,email,number,pay_id,amount,people,gender,pay_status) 
	VALUES('$name','$email','$number','$pay_id','$amount_new','$people','$gender','Success')";
	mysqli_query($conn,$query);	
?>
