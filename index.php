<!DOCTYPE html>
<html>
<?php

$connect = mysqli_connect(
    'db', #service name
    'admin', #username
    'password', #password
    'db_docker' #database name

);

$tbl_name  = "tbl_info";

$query = "SELECT * FROM $tbl_name";

$res = mysqli_query($connect, $query);




?>



<head>
    <title>Simple PHP with Docker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 50px auto;
            max-width: 600px;
        }

        h1 {
            color: #333;
        }
    </style>
</head>
<body>
<?php echo '
    <div class="container">
      <h1>Hello, World!</h1>
      ';
      $fetch = mysqli_fetch_assoc($res);

      echo '<p>' .$fetch['fname']. '</p>';
      echo '<p>' .$fetch['mname']. '</p>';
      echo '<p>' .$fetch['lname']. '</p>';

   echo '</div> ';

    ?>
