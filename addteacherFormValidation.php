<?php

include 'connection.php';
if (isset($_POST['TN']) && isset($_POST['TF']) && isset($_POST['TE']) && isset($_POST['TD'])) {
    $name = $_POST['TN'];
    $facno = $_POST['TF'];
    $designation = $_POST['TD'];
    $Cabin = $_POST['Cb'];  
    $contact = $_POST['TP'];
    $email = $_POST['TE'];
   
} else {
    $message = "dead.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "INSERT INTO teachers VALUES ('$facno','$name','$designation','$Cabin','$contact','$email')");
$sql = "CREATE TABLE " . $facno . " (
id VARCHAR(10) PRIMARY KEY,
day VARCHAR(10), 
period1 VARCHAR(30),
period2 VARCHAR(30),
period3 VARCHAR(30),
period4 VARCHAR(30),
period5 VARCHAR(30),
period6 VARCHAR(30),
period7 VARCHAR(30)
)";
mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), $sql);
$days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
for ($i = 0; $i < 6; $i++) {
    $id=$i;
    $day = $days[$i];
    $sql = "INSERT into " . $facno . " VALUES('$id','$day','','','','','','','')";
    mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), $sql);
}
if ($q) {
    $message = "Teavher added.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:addteachers.php");
} else {
    $message = "Username and/or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    // header("Location:index.php");

}

?>
