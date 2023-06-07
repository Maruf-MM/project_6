<?php 
$conn=new mysqli('localhost','root','','project');

if($conn->connect_error)
{
  die("Connection failed".$conn->connect_error);
}
else
{
  if(isset($_POST['login']))
  {
     $user_name=$_POST['user_name'];
     $user_password=$_POST['password'];

     $Qretrive="SELECT * FROM user_info where user_name='$user_name'and password='$user_password'";
     $retriveQ=$conn->query($Qretrive);

     if($retriveQ)
     {
      $num=mysqli_num_rows($retriveQ);
      if($num>0)
      {
       header("Location:dashboard.php");
      }
      else 
       echo"Failed";
     }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      width: 300px;
      margin: 0 auto;
      margin-top: 150px;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="submit"],
    input[type="button"] {
      width: 100%;
      background-color: #4CAF50;
      color: #ffffff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover,
    input[type="button"]:hover {
      background-color: #45a049;
    }

    .register-link {
      text-align: center;
      margin-top: 10px;
    }

    .register-link a {
      color: #4CAF50;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>User Login</h1>
    <form action="" method="POST">
      <input type="text" name="user_name" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" name="login" value="Login">
    </form>
    <div class="register-link">
      <p>Don't have an account? <a href="registration.php">Register here</a></p>
    </div>
  </div>
</body>
</html>
