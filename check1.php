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

<div class="navbar navbar-inverse navbar-fixed-top " id="menu">
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
                <li><a href="index.php" style="font-size:20px;">Home</a></li>
            </ul>

        </div>
    </div>
</div>
<!--NAVBAR SECTION END-->
<br>
--------------------------------------
     
<?php 
$dbhost='localhost';
$dbname='ttms';
$dbusername='root';
$dbpass='';
$mysqli=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);

?>

<html>
<body>
<div class="wrapper">
    <div class="form">
       <div class="inputfield">
<form action="" method="post">

<label>FACULTY NUMBER :</label>
<input type="varchar" name="facno"><br>

                        <label for="day">Select DAY :</label>
                        <select class="form-control" id="day" name="Day">
                            <option selected disabled>Select</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
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
    else if($period=='period7'){
      echo  '<td>' . $row["period7"].  "</td></tr>";
      }
    
    }
  }
  
?>

</body>
</html>

<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    
    var addteacherBtn = document.getElementById("teachermanual");
    var heading = document.getElementById("popupHead");
    var facultyForm = document.getElementById("addTeacherForm");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    addteacherBtn.onclick = function () {
        modal.style.display = "block";
        //heading.innerHTML = "Faculty Login";
        facultyForm.style.display = "block";
       


    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
        //adminForm.style.display = "none";
        facultyForm.style.display = "none";

    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


<div>
    <br>
    <style>
        table {
            margin-top: 10px;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            margin-left: 30px;
            width: 90%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

    <script>
        function deleteHandlers() {
            var table = document.getElementById("teacherstable");
            var rows = table.getElementsByTagName("tr");
            for (i = 0; i < rows.length; i++) 
            {
                var currentRow = table.rows[i];
                //var b = currentRow.getElementsByTagName("td")[0];
                var createDeleteHandler =
                    function (row) {
                        return function ()
                        {
                            var cell = row.getElementsByTagName("td")[0];
                            var id = cell.innerHTML;
                            var x;
                            if (confirm("Are You Sure?") == true) 
                            {
                                window.location.href = "deleteteacher.php?name=" + id;

                            }

                        };
                    };
                currentRow.cells[6].onclick = createDeleteHandler(currentRow);
            }
        }
    </script>

    <table id=teacherstable style="margin-left: 80px">
        <caption><strong>Teacher's Information </strong></caption>
        <tr>
            <th width="130">Faculty No</th>
            <th width=290>Name</th>
            <th width="190">Designation</th>
            <th width="190">Contact No.</th>
            <th width="290">Email ID</th>
        </tr>
        <tbody>
        <?php
        include 'connection.php';
        $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
            "SELECT * FROM teachers ORDER BY faculty_number ASC");

        while ($row = mysqli_fetch_assoc($q)) {
            echo "<tr><td>{$row['faculty_number']}</td>
                      <td>{$row['name']}</td>
                      <td>{$row['designation']}</td>
                      <td>{$row['contact_number']}</td>
                      <td>{$row['emailid']}</td>
                  </tr>\n";
        }
        echo "<script>deleteHandlers();</script>";
        ?>
        </tbody>
    </table>

</div>
<!--HOME SECTION END-->



<!--  Jquery Core Script -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!--  Core Bootstrap Script -->
<script src="assets/js/bootstrap.js"></script>
<!--  Flexslider Scripts -->
<script src="assets/js/jquery.flexslider.js"></script>
<!--  Scrolling Reveal Script -->
<script src="assets/js/scrollReveal.js"></script>
<!--  Scroll Scripts -->
<script src="assets/js/jquery.easing.min.js"></script>
<!--  Custom Scripts -->
<script src="assets/js/custom.js"></script>
</body>
</html>
