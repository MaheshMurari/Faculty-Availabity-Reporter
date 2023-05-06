<?php

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
    <!-- Google	Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'/>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css'>
    
    
</head>
<body style="background: white; background-repeat: no-repeat; background-size: cover;  ">
<div class="navbar navbar-inverse navbar-fixed-top " id="menu">
    <div class="container">
        <div align="center">
            <h2 align="center">FACULTY AVAILABILITY REPORTER</h2>
            <button data-scroll-reveal="enter from the bottom after 0.2s"
            id="adminLoginBtn" class="btn btn-success btn-lg" STYLE="margin-left:100%;font-size:12px;padding:5px; margin-top:0px;">ADMIN LOGIN
    </button>
        </div>

    </div>
</div>

<br>
<br>
<br>
<br>

<div align="CENTER" STYLE="margin-top: 10px;">
  <div class="row mt-4">
        <div class="col-md-7">
             <div class="card" style="margin:10px">
                    <div class="card-body" align="center">

                            <a href="facultypage.php"><img style="width: 400px; height:400px; boder-radius:50;" src="assets/img/faculty/view.png"></a><br><br>
                             
                            <form action="facultypage.php" method="post">

                            <button type="submit" name="edit_btn" class="btn btn-success" style=" padding-left: 26px; padding-right: 26px;font-size: 20px; margin-bottom: 20px;margin-right: 75px;font-family: Georgia, serif; background-color: #00C9FF;"> View Time table </button>

                            </form>
                    </div>
            </div>
        </div>


        <div class="row mt-4">
        <div class="col-md-4">
             <div class="card" style="margin:10px; boder-radius: 10px;">
                    <div class="card-body" align="center">

                          <a href="check.php" > <img style="width: 400px; height:400px;border-radius:50;" src="assets/img/faculty/check.png"></a><br><br>
                             
                            <form action="check.php" method="post">
                            <button type="submit" name="edit_btn" class="btn btn-success" style="padding-left: 26px; padding-right: 26px;font-size: 20px; font-family: Georgia, serif; background-color: #00C9FF; margin-left: 75px;"> Check Avaliability </button>

                            </form>
                    </div>
            </div>
        </div>



    
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times</span>
            <h2 id="popupHead">Modal Header</h2>
        </div>
        <div class="modal-body" id="LoginType">
            <!--Admin Login Form-->
            <div style="display:none" id="adminForm">
                <form action="adminFormvalidation.php" method="POST">
                    <div class="form-group">
                        <label for="adminname">Username</label>
                        <input type="text" class="form-control" id="adminname" name="UN" placeholder="Username ...">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="PASS"
                               placeholder="Password ...">
                    </div>
                    <div align="right">
                        <input type="submit" class="btn btn-default" name="LOGIN" value="LOGIN">
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</div>


<div id="faculty-sec">
    <div class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">OUR FACULTY </h1>

            </div>

        </div>
        <!--/.HEADER LINE END-->

        <div class="row">


            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="faculty-div">
                    <img src="assets/img/faculty/director.jpeg" class="img-rounded"/>
                    <h4 align="center" style="margin-left: 30px;">CH.APPA RAO</h4>
                    <hr/>
                    <h4 align="center">Technical Director<br/></h4>
                    <h5 align="center" style="margin-center: 40px;">SRI VASAVI ENGINEERING COLLEGE</h5>
                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                <div class="faculty-div">
                    <img src="assets/img/faculty/Principal_1.jpg" class="img-rounded"/>
                    <h4 align="center" style="margin-left: 40px;">DR.G.RATNAKAR RAO</h4>
                    <hr/>
                    <h4 align="center">Principal<br/></h4>
                    <h5 align="center" style="margin-center: 40px;">SRI VASAVI ENGINEERING COLLEGE</h5>
                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                <div class="faculty-div">
                    <img src="assets/img/faculty/hod.jpeg" class="img-rounded"/>
                    <h4 align="center" style="margin-center: 40px;">DR.D.JAYA KUMARI</h4>
                    <hr>
                    <h4 align="center">HOD<br/></h4>
                    <h5 align="center" style="margin-center: 40px;">Department of CSE</h5>

                </div>
            </div>

        </div>
    </div>
</div>





<script>
    // Get the modal
    var modal = document.getElementById('myModal');
    var teacherLoginBtn = document.getElementById("teacherLoginBtn");
    var adminLoginBtn = document.getElementById("adminLoginBtn");
    var heading = document.getElementById("popupHead");
    var facultyForm = document.getElementById("facultyForm");
    var adminForm = document.getElementById("adminForm");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    adminLoginBtn.onclick = function () {
        modal.style.display = "block";
        heading.innerHTML = "Admin Login";
        adminForm.style.display = "block";
        facultyForm.style.display = "none";

    }
    


    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
        adminForm.style.display = "none";
        facultyForm.style.display = "none";

    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

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
</div>
</body>
</html>