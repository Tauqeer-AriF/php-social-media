<?php

    include ("connection.php");
    error_reporting(0);

?>


<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>

<nav class="navbar">
        <span class="navbar-toggle" id="js-navbar-toggle">
        <i class="fa fa-fw fa-home"></i>
        </span>
        <a href="#" class="logo">TauqEER's MEDIA</a>
        <ul class="main-nav" id="js-menu">
            <li>
                <a href="#" class="nav-links">Home</a>
            </li>
            <li>
                <a href="#" class="nav-links">Products</a>
            </li>
            <li>
                <a href="#" class="nav-links">About Us</a>
            </li>
            <li>
                <a href="#" class="nav-links">Contact Us</a>
            </li>
            <li>
                <a href="#" class="nav-links">Blog</a>
            </li>
        </ul>
    </nav>
    <form action="" method="GET" style="margin-top:80px; margin-bottom:270px;margin-left:33%">
        <input type="text" name="rollno" placeholder="ID" value="<?php echo $_GET['rn']; ?>"/><br><br>
        <input type="text" name="studentname" placeholder="Name" value="<?php echo $_GET['sn']; ?>"/><br><br>
        <input type="text" name="class" placeholder="Status" value="<?php echo $_GET['cn']; ?>"/><br><br>
        <input type="submit" name="submit" value="Update" id="btn"/>
    </form>
    


    <?php
    
        if($_GET['submit'])
        {

            $rollno = $_GET['rollno'];
            $name = $_GET['studentname'];
            $class = $_GET['class'];
            $query = "UPDATE STUDENT SET STUDENTNAME='$name' , CLASS='$class' WHERE ROLLNO='$rollno' ";
            $data = mysqli_query($conn, $query);

            if($data)
            {
                echo "data has been insrted";
            }
            else{
                echo "data is not inserted";
            }
        }

        else{
            // echo "<font color = 'blue'> press the button to save the changes";
        }

    ?>

<footer>
  <ul>
    <li><a href="#">Twitter</a></li>
    <li><a href="#">Codepen</a></li>
    <li><a href="#">Email</a></li>
    <li><a href="#">Dribbble</a></li>
    <li><a href="https://github.com/Tauqeer-Arif">Github</a></li>
    <li>
      <p>👋</p>
    </li>
  </ul>
    </footer>



<script>
let mainNav = document.getElementById('js-menu');
let navBarToggle = document.getElementById('js-navbar-toggle');

navBarToggle.addEventListener('click', function () {
  mainNav.classList.toggle('active');
});
</script>    
</body>
</html>