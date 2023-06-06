<!DOCTYPE html>
<html>
<head>
  <title>Institute Information</title>
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
    <h1>Institute Information</h1>
    <form action="" method="POST">
      <input type="text" name="instituteID" placeholder="Institute ID" required>
      <input type="text" name="instituteName" placeholder="Institute Name" required>
      <div class="button-container">
        <input type="submit" name="insertBtn" value="Insert">
        <input type="submit" name="updateBtn" value="Update">
        <input type="submit" name="deleteBtn" value="Delete">
      </div>
    </form>
  </div>
</body>
</html>