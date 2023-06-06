<!DOCTYPE html>
<html>
<head>
  <title>Marks Information</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      width: 500px;
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

    .form-row {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 10px;
    }

    .form-row input[type="text"],
    .form-row input[type="number"] {
      flex: 1;
      margin-right: 10px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .form-row button {
      flex: 1;
      background-color: #4CAF50;
      color: #ffffff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .form-row button:not(:last-child) {
      margin-right: 10px;
    }

    .form-row button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Marks Information</h1>
    <form action="" method="POST">
      <div class="form-row">
        <input type="text" name="marks_id" placeholder="Marks id" required>
        <input type="text" name="student_id" placeholder="Student id" required>
      </div>
      <div class="form-row">
        <input type="text" name="sub_id" placeholder="Subject id" required>
        <input type="number" name="marks" placeholder="Marks" required>
      </div>
      <div class="form-row">
        <button type="submit" name="insertBtn">Insert</button>
        <button type="submit" name="updateBtn">Update</button>
        <button type="submit" name="deleteBtn">Delete</button>
      </div>
    </form>
  </div>
</body>
</html>