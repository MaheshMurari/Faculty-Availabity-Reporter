<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="assets/css/styles.css" rel="stylesheet"/>
</head>
<body>
<div class="wrapper">
    <div class="form">
       <div class="inputfield">
<form action="" method="post">

<html>
<body>
<div class="wrapper">
    <div class="form">
       <div class="inputfield">
<form action="" method="post">

<label>FACULTY NUMBER :</label>
<input type="varchar" name="facno"><br>
<div class="inputfield">
                        <label for="day">Select DAY :</label>
                        <div class="">
                        <select class="form-control" id="day" name="Day">
                            <option selected disabled>Select</option>
                            <option value="0">Monday</option>
                            <option value="1">Tuesday</option>
                            <option value="2">Wednesday</option>
                            <option value="3">Thursday</option>
                            <option value="4">Friday</option>
                            <option value="5">Saturday</option>
                        </select>
                        </div>
                        </div>
                        <div class="inputfield">
                        <label for="c3">Select Slot:</label>
                        <div class="">
                        <select class="form-control" id="c3" name="c3">
                            <option selected disabled>Select</option>
                            <option value="period1">9:30-10:30</option>
                            <option value="period2">10:30-11:20</option>
                            <option value="period3">11:20-12:10</option>
                            <option value="period4">12:10-1:00</option>
                            <option value="period5">2:00-2:50</option>
                            <option value="period6">2:50-3:40</option>
                            <option value="period7">3:40-4:30</option>
                            </select>
                            </div>
<div class="inputfield">                            </div>
<label>Text</label>
<input type="varchar" name="txt">
</div>
<div class="inputfield">
<input type="submit" name="submit" class="btn">
</div>
</div>
</form>
</div>
    </div>
</div>	
<?php

if(isset($_POST['submit']))
  {
    
    $facno=$_POST['facno'];
    $day=$_POST['Day'];
    $period=$_POST['c3'];
    $txt=$_POST['txt'];
    
    

$mysqli=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);

$sql= "UPDATE ".$facno." SET ".$period." = '$txt' WHERE id = '$day'";

//$sql = "UPDATE tcse26 SET period7 ='Doe' WHERE id=2";

if (mysqli_query($mysqli, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($mysqli);
}
  }

?>
</body>
</html>

    
