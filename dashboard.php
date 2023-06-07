<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    .container {
      display: flex;
      justify-content: space-between;
      margin: 20px;
    }

    .sidebar {
      flex: 0 0 200px;
      background-color: #f5f5f5;
      padding: 20px;
    }

    .main-content {
      flex: 1;
      background-color: #ffffff;
      padding: 20px;
    }

    h1 {
      margin-top: 0;
    }

    .menu-item {
      margin-bottom: 10px;
    }

    .menu-item a {
      display: block;
      padding: 8px;
      background-color: #ddd;
      color: #333;
      text-decoration: none;
      transition: background-color 0.3s;
    }

    .menu-item a:hover {
      background-color: #ccc;
    }

    .content {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>Student Result System Dashboard</h1>
  </div>
  <div class="container">
    <div class="sidebar">
      <div class="menu-item">
        <a href="#">Dashboard</a>
      </div>
      <div class="menu-item">
        <a href="#">Students</a>
      </div>
      <div class="menu-item">
        <a href="#">Results</a>
      </div>
      <div class="menu-item">
        <a href="#">Reports</a>
      </div>
      <div class="menu-item">
        <a href="#">Settings</a>
      </div>
    </div>
    <div class="main-content">
      <div class="content">
        <h2>Welcome to the Dashboard</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan tortor id fringilla vehicula. Proin non aliquet leo. Morbi facilisis, turpis vitae semper facilisis, tortor mi varius orci, ut eleifend lorem mi id turpis.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan tortor id fringilla vehicula. Proin non aliquet leo. Morbi facilisis, turpis vitae semper facilisis, tortor mi varius orci, ut eleifend lorem mi id turpis.</p>
      </div>
    </div>
  </div>
</body>
</html>
