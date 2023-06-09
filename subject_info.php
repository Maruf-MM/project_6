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
    $subject_id=$_POST['subject_id'];
    $subject_name=$_POST['subject_name'];
    $subject_code=$_POST['subject_code'];
    $semester_id=$_POST['semester_id'];
    $total_marks=$_POST['total_marks'];

    $sql="INSERT into subject_info VALUE ('$subject_id','$subject_name',$subject_code,$semester_id,'$total_marks')";
    $execute=$conn->query($sql);
  }



  if(isset($_POST['updateBtn'])) {
    $subject_id = $_POST['subject_id'];
    $subject_name = $_POST['subject_name'];
    $subject_code = $_POST['subject_code'];
    $semester_id = $_POST['semester_id'];
    $total_marks = $_POST['total_marks'];
    
    $sql = "UPDATE subject_info SET subject_name='$subject_name', subject_code='$subject_code', semester_id='$semester_id',total_marks=$total_marks WHERE subject_id='$subject_id'";
    $execute = $conn->query($sql);
  }
  


  if(isset($_POST['deleteBtn']))
  {
    $subject_id=$_POST['subject_id'];
    $subject_name=$_POST['subject_name'];
    $subject_code=$_POST['subject_code'];
    $semester_id=$_POST['semester_id'];
    $total_marks=$_POST['total_marks'];

    $sql="DELETE FROM subject_info WHERE subject_id='$subject_id'";
    $execute=$conn->query($sql);
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Subject Information</title>
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
    input[type="number"],
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
    
    .button-container {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }
    
    .button-container input[type="submit"] {
      flex-grow: 1;
      margin-right: 5px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Subject Information</h1>
    <form action="" method="POST">
      <input type="text" name="subject_id" placeholder="Subject ID" required>
      <input type="text" name="subject_name" placeholder="Subject Name" required>
      <input type="text" name="subject_code" placeholder="Subject Code" required>
      <input type="text" name="semester_id" placeholder="Semester ID" required>
      <input type="number" name="total_marks" placeholder="Total Marks" required>
      <div class="button-container">
        <input type="submit" name="insertBtn" value="Insert">
        <input type="submit" name="updateBtn" value="Update">
        <input type="submit" name="deleteBtn" value="Delete">
      </div>
    </form>
  </div>
</body>
</html>