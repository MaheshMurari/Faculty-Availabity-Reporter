<?php 
$dbhost='localhost';
$dbname='ttms';
$dbusername='root';
$dbpass='';
$mysqli=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>TimeTable Management System</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONT AWESOME CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- FLEXSLIDER CSS -->
    <link href="assets/css/flexslider.css" rel="stylesheet"/>
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'/>
     <link href="assets/css/styles.css" rel='stylesheet' type='text/css'/>
</head>
<body>

<div style=" "class="navbar navbar-inverse navbar-fixed-top " id="menu">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="navbar-collapse collapse move-me">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="addteachers.php">ADD TEACHERS</a></li>
                <li><a href="addsubjects.php">ADD SUBJECTS</a></li>
              
                <li><a href="generatetimetable.php">GENERATE TIMETABLE</a></li>
                <li><a href="alt.php">ALTER TIMETABLE</a></li>
                 
                    </ul>
               

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">LOGOUT</a></li>
            </ul>

        </div>
    </div>
</div>



<div class="wrapper">
    <div class="form">
       <div class="inputfield" style="margin:30px;">
<form action="" method="post">

<label>FACULTY NUMBER :</label><br>

<input type="varchar" name="facno" style="width: 330px; border-radius: 5px;"><br>

<label for="day">Select DAY :</label>
    <select class="form-control" id="day" name="Day">
        <option selected disabled>Select</option>             <option value="0">Monday</option>
                            <option value="1">Tuesday</option>
                            <option value="2">Wednesday</option>
                            <option value="3">Thursday</option>
                            <option value="4">Friday</option>
                            <option value="5">Saturday</option>
                        </select>

                    <label for="c3">Select Slot:</label>
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
<label style="width: 330px; border-radius: 5px;">Replace With:<input style="width: 330px; border-radius: 5px;"type="varchar" name="txt">
        <form action="generatetimetable.php" method="">
        <div class="inputfield" style=" margin-top: 5px;">
            <input type="submit" name="submit" class="btn">
        </div>
    </form>
</div>
</form>
</div>
    </div>
</div>
<div class="wrapper">
    <div class="form">
<div style=" background:#F4D03F; width: 400px; padding-top: 60px;height: 150px;border-radius: 5px; text-align: right; font-size: 25px; font-color: white; display: inline-flex;" >
 	
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
mysqli_close($mysqli);
?>
</div>
</div>
</div>
</body>
</html>

    
