<?php

$username = $_POST['username'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
if($confirmpassword==$password)
{
	if (!empty($username) ||  !empty($email) || !empty($phone) || !empty($gender) || !empty($address) || !empty($address) ||!empty($password) ||!empty($confirmpassword) ) 
{
	
	$host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "test";
// Create connection
// here database_name=test
// tabel_name=exam
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error())
	{
		
       die('Connect Error ('. mysqli_connect_errno() .') '
        . mysqli_connect_error());
    }
    else
	{
        $sql = "INSERT INTO exam (username,email,phone,gender,address,password,confirmpassword)
        values ('$username','$email','$phone','$gender','$address','$password','$confirmpassword')";
    if ($conn->query($sql))
	{
     echo "New record is inserted sucessfully";
    }
    else{
        echo "Error: ". $sql ."
        ". $conn->error;
        }
    $conn->close();
}
}else {
 echo "All field are required";
 die();
}
}else{echo"Password should be match.";}

$name="SomeName";
$value=100;
$expiration=time()+(60*60*24*7);
setcookie($name,$value,$expiration);


if(isset($_COOKIE["SomeName"]))
{
	$someone=$_COOKIE["SomeName"];
	echo"$someone";
}else{
	$someone="";
}

?>


