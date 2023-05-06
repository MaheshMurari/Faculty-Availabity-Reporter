<?php 
$dbhost='localhost';
$dbname='ttms';
$dbusername='root';
$dbpass='';
$mysqli=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);
if(!$mysqli)
{
  echo "Not connt";
}
else 
{
  echo "conn";
}
?>
<html>
<body>
<form action="" method="post">
facno<input type="varchar" name="facno"><br>
Day<input type="varchar" name="Day"><br>
slot<input type="text" name="c3"><br>
<input type="submit" name="submit">
</form>

<?php
if(isset($_POST['submit']))
  {
    $facno=$_POST['facno'];
    $day=$_POST['Day'];
    $period=$_POST['c3'];
    //echo "SELECT * FROM ".$facno." where Day='$Day'";
    $q1="SELECT * FROM ".$facno." where day = '$day'";
    //echo $q1;
    $sql = mysqli_query($mysqli,$q1);

    while($row = $sql->fetch_assoc()) {
    if($period=='period1'){
    echo  '<td>' . $row["period1"].  "</td></tr>";
    }
    else if($period=='period2'){
    echo  '<td>' . $row["period2"].  "</td></tr>";
    }
    else if($period=='period3'){
    echo  '<td>' . $row["period3"].  "</td></tr>";
    }
    else if($period=='period4'){
    echo  '<td>' . $row["period4"].  "</td></tr>";
    }
    else if($period=='period5'){
    echo  '<td>' . $row["period5"].  "</td></tr>";
    }
    else if($period=='period6'){
    echo  '<td>' . $row["period6"].  "</td></tr>";
    }
    
    }
  }
  else
  {
    echo "Not Found";
  } 
  
?>

</body>
</html>
