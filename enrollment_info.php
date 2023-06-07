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
    $enrollment_id=$_POST['enrollment_id'];
    $student_id=$_POST['student_id'];
    $date=$_POST['date'];
    $year=$_POST['year'];
    $semester=$_POST['semester'];
    $status=$_POST['status'];

    $sql="INSERT into student_enrollment_info VALUE ('$enrollment_id','$student_id',$date,$year,$semester,'$status')";
    $execute=$conn->query($sql);
  }



  if(isset($_POST['updateBtn'])) {
    $enrollment_id = $_POST['enrollment_id'];
    $student_id = $_POST['student_id'];
    $date = $_POST['date'];
    $year = $_POST['year'];
    $semester = $_POST['semester'];
    $status = $_POST['status'];
    
    $sql = "UPDATE student_enrollment_info SET student_id='$student_id', date='$date', year='$year', semester='$semester', status='$status' WHERE enrollment_id='$enrollment_id'";
    $execute = $conn->query($sql);
  }
  


  if(isset($_POST['deleteBtn']))
  {
    $enrollment_id=$_POST['enrollment_id'];
    $student_id=$_POST['student_id'];
    $date=$_POST['date'];
    $year=$_POST['year'];
    $semester=$_POST['semester'];
    $status=$_POST['status'];

    $sql="DELETE FROM student_enrollment_info WHERE enrollment_id='$enrollment_id'";
    $execute=$conn->query($sql);
  }


}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student Enrollment Page</title>
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
    input[type="date"],
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
    }

    .button-container input[type="submit"] {
      width: 30%;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Student Enrollment</h1>
    <form action="" method="POST">
      <input type="text" name="enrollment_id" placeholder="Enrollment ID" required>
      <input type="text" name="student_id" placeholder="Student ID" required>
      <input type="text" name="semester" placeholder="Semester" required>
      <input type="date" name="date" required>
      <input type="text" name="year" placeholder="Year" required>
      <select name="status" required>
        <option value="" disabled selected>Select Status</option>
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
        <option value="pending">Pending</option>
      </select>
      <div class="button-container">
        <input type="submit" name="insertBtn" value="Insert">
        <input type="submit" name="updateBtn" value="Update">
        <input type="submit" name="deleteBtn" value="Delete">
      </div>
    </form>
  </div>
</body>
</html>