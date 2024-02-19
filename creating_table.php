<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "GaoGaoBooking";

  //creating connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  //check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  //SQL query to create table
  $sql = "CREATE TABLE Table_Reservation (
            id INT(10) PRIMARY KEY AUTO_INCREMENT,
            names VARCHAR(100),
            email VARCHAR (40),
            dates VARCHAR (10),
            times VARCHAR (20),
            attendees VARCHAR (30),
            comments VARCHAR(30)
          )";

  if (mysqli_query($conn, $sql)) {
    echo "Table of Table Reservation is created successfully";
  } else {
    echo "Error creating table: " . mysqli_error($conn);
  }
  mysqli_close($conn);

 ?>
