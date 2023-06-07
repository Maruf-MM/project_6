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
    $department_id=$_POST['department_id'];
    $department_name=$_POST['department_name'];
    $institute_id=$_POST['institute_id'];

    $sql="INSERT into department_info VALUE ('$department_id','$department_name','$institute_id')";
    $execute=$conn->query($sql);
  }
  if(isset($_POST['updateBtn']))
  {
    $department_id=$_POST['department_id'];
    $department_name=$_POST['department_name'];
    $institute_id=$_POST['institute_id'];

    $sql="UPDATE department_info SET department_id='$department_id',department_name='$department_name',institute_id='$institute_id'";
    $execute=$conn->query($sql);
  }
  if(isset($_POST['deleteBtn']))
  {
    $department_id=$_POST['department_id'];
    $department_name=$_POST['department_name'];
    $institute_id=$_POST['institute_id'];

    $sql="DELETE FROM department_info WHERE department_id='$department_id'";
    $execute=$conn->query($sql);
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Department Information</title>
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

    input[type="submit"],
    button {
      flex: 1;
      background-color: #4CAF50;
      color: #ffffff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-right: 5px;
    }

    input[type="submit"]:hover,
    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Department Information</h1>
    <form action="" method="POST">
      <input type="text" name="department_id" placeholder="Department ID" required>
      <input type="text" name="department_name" placeholder="Department Name" required>
      <input type="text" name="institute_id" placeholder="Institute ID" required>
      <div class="button-container">
        <input type="submit" name="insertBtn" value="Insert">
        <input type="submit" name="updateBtn" value="Update">
        <input type="submit" name="deleteBtn" value="Delete">
      </div>
    </form>
  </div>
</body>
</html>
