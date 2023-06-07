<?php

$conn=new mysqli('localhost','root','','project');

if($conn->connect_error)
{
  die("Connection failed".$conn->connect_error);
}
else
{

  if(isset($_POST['insertBtn']))
  {
    $session_id=$_POST['session_id'];
    $session_name=$_POST['session_name'];

    $sql="INSERT into session_info VALUE ('$session_id','$session_name')";
    $execute=$conn->query($sql);
  }



  if(isset($_POST['updateBtn'])) {
    $session_id = $_POST['session_id'];
    $session_name = $_POST['session_name'];
 
    $sql = "UPDATE session_info SET session_id='$session_id',session_name='$session_name' WHERE session_id='$session_id'";
    $execute = $conn->query($sql);
  }
  


  if(isset($_POST['deleteBtn']))
  {
    $session_id=$_POST['session_id'];
    $session_name=$_POST['session_name'];
  
    $sql="DELETE FROM session_info WHERE session_id='$session_id'";
    $execute=$conn->query($sql);
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Session Information</title>
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

    input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .button-container {
      display: flex;
      justify-content: space-between;
      margin-top: 10px;
    }

    input[type="submit"] {
      flex: 1;
      background-color: #4CAF50;
      color: #ffffff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-right: 5px;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Session Information</h1>
    <form action="" method="POST">
      <input type="text" name="session_id" placeholder="Session ID" required>
      <input type="text" name="session_name" placeholder="Session Name" required>
      <div class="button-container">
        <input type="submit" name="insertBtn" value="Insert">
        <input type="submit" name="updateBtn" value="Update">
        <input type="submit" name="deleteBtn" value="Delete">
      </div>
    </form>
  </div>
</body>
</html>