<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #f4f4f9;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            border: 2px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            margin: 30px 0;
        }
        ul li a {
            text-decoration: none;
            color: #007bff;
            font-size: 18px;
            padding: 10px 20px;
            border: 2px solid #007bff;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }
        ul li a:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Manage Main Data</h1>
    <ul>
        <li><a href="tambahlaptop.php">ADD Laptop</a></li>
        <li><a href="tambahmonitor.php">ADD Monitor</a></li>
        <li><a href="tambahperlengkapan.php">ADD PHERIPERALS</a></li>
        <li><a href="editlaptop.php">Delete Laptop</a></li>
        <li><a href="editlaptop.php">Update Laptop</a></li>
    </ul>
    </div>
</body>
</html>