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
    $semester_id=$_POST['semester_id'];
    $semester_name=$_POST['semester_name'];
    $dept_id=$_POST['dept_id'];

    $sql="INSERT into semester_info VALUE ('$semester_id','$semester_name',$dept_id)";
    $execute=$conn->query($sql);
  }



  if(isset($_POST['updateBtn'])) {
    $semester_id = $_POST['semester_id'];
    $semester_name = $_POST['semester_name'];
    $dept_id=$_POST['dept_id'];
 
    $sql = "UPDATE semester_info SET semester_name='$semester_name',dept_id='$dept_id' WHERE semester_id='$semester_id'";
    $execute = $conn->query($sql);
  }
  


  if(isset($_POST['deleteBtn']))
  {
    $semester_id=$_POST['semester_id'];
    $semester_name=$_POST['semester_name'];
    $dept_id=$_POST['dept_id'];
    $sql="DELETE FROM semester_info WHERE semester_id='$semester_id'";
    $execute=$conn->query($sql);
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Semester Information</title>
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
    <h1>Semester Information</h1>
    <form action="" method="POST">
      <input type="text" name="semester_id" placeholder="Semester ID" required>
      <input type="text" name="semester_name" placeholder="Semester Name" required>
      <input type="text" name="dept_id" placeholder="Department ID" required>
      <div class="button-container">
        <input type="submit" name="insertBtn" value="Insert">
        <input type="submit" name="updateBtn" value="Update">
        <input type="submit" name="deleteBtn" value="Delete">
      </div>
    </form>
  </div>
</body>
</html>
