<doctype HTML>
<html>
<head>
  <title>Register Form</title>
</head>
<body>
<h1>Registration Form</h1>
 <form action="data.php" method="POST">
  <table>
   <tr>
    <td>Name :</td>
    <td><input type="text" name="username" required></td>
   </tr>
    <tr>
       </tr>
   <tr>
    <td>Email :</td>
    <td><input type="email" name="email" required></td>
   </tr> 
   <tr>
    <td>Phone no :</td>
    <td><input type="tel" name="phone" required></td>
   </tr>
   <td>Gender :</td>
    <td>
     <input type="radio" name="gender" value="m" required>Male
     <input type="radio" name="gender" value="f" required>Female
    </td>
   <tr>
   <td>Address :</td>
    <td><input type="text" name="address" required></td>
   </tr>
    <td>Password :</td>
	<td><input type="password" name="password" required></td>
   </tr>
   <td>Confirm Password :</td>
	<td><input type="password" name="confirmpassword" required></td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit"></td>
	<td><input type="reset" value="reset"></td>
   </tr></table>
  
</body>
</html>