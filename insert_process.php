<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "GaoGaoBooking";


  //Creating connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  //Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  //request info from the form
  if (isset($_POST['new']) && $_POST['new'] == 1) {

    $names = $_REQUEST['names'];
    $email = $_REQUEST['email'];
    $dates = $_REQUEST['dates'];
    $times = $_REQUEST['times'];
    $attendees = $_REQUEST['attendees'];
    $comments = $_REQUEST['comments'];

    //Database query to insert data
    $sql = "INSERT INTO Table_Reservation (names, email, dates, times,attendees, comments)
            VALUES ('$names', '$email','$dates', '$times','$attendees', '$comments')";

    if (mysqli_query($conn, $sql)) {
      echo "<center><b>Reserve Successfully</br></b></center>";
      echo "<center>Please arrive 10 minutes before reservation times else your reservation may be canceled.<br></center>";
      echo "<center><h2>Your Reservation Details:</h2></center>";
      echo "<br>";
      echo "<center>Name: $names</center>";
      echo "<br>";
      echo "<center>Email: $email</center>";
      echo "<br>";
      echo "<center>Date: $dates</center>";
      echo "<br>";
      echo "<center>Time: $times</center>";
      echo "<br>";
      echo "<center>Attendees: $attendees</center>";
      echo "<br>";
      echo "<center>Comments: $comments</center>";
      echo "<br>";
      echo "<center><a href='index1.html'>Back</a></center>";
    } else {
      echo "Error insert data: " . mysqli_error($conn);
    }
  }

  mysqli_close($conn);
?>
