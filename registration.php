<?php
$conn=new mysqli('localhost','root','','project');
if($conn->connect_error)
{
  die("Connection failed".$conn->connect_error);
}
else
{
  if(isset($_POST['registerBtn']))
  {
    $username=$_POST['username'];
    $roll_no=$_POST['roll_no'];
    $reg_no=$_POST['reg_no'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $fathers_name=$_POST['fathers_name'];
    $mothers_name=$_POST['mothers_name'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $password=$_POST['password'];
    
    $sql="INSERT into user_info VALUE ('$username','$roll_no','$reg_no','$email','$contact','$fathers_name','$mothers_name','$address','$gender','$password')";
    $execute=$conn->query($sql);
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      width: 400px;
      margin: 0 auto;
      margin-top: 50px;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="password"],
    select {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      width: 100%;
      background-color: #4CAF50;
      color: #ffffff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Registration</h1>
    <form action="" method="POST">
      <input type="text" name="username" placeholder="Username" required>
      <input type="text" name="roll_no" placeholder="Roll No" required>
      <input type="text" name="reg_no" placeholder="Registration No" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="tel" name="contact" placeholder="Contact Number" required>
      <input type="text" name="fathers_name" placeholder="Father's Name" required>
      <input type="text" name="mothers_name" placeholder="Mother's Name" required>
      <input type="text" name="address" placeholder="Address" required>
      <select name="gender" required>
        <option value="" disabled selected>Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" name="registerBtn" value="Registration">
    </form>
  </div>
</body>
</html>