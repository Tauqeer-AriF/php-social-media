
<?php
        include ("connection.php");
        error_reporting(0);
        include ("insert.php");


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

    <div class="modal-btn">
       <h3>Let's Have your kind Status:-</h3><button id="myBtn">Upload Status</button>
    </div>
    <div id="myModal" class="modal">

        <div class="modal-content">
            <span class="close">&times;</span>
                <div class="content">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="text" name="rollno" value="" placeholder="ID"/><br><br>
                        <input type="text" name="studentname" value="" placeholder="Name"/><br><br>
                        <input type="text" name="class" value="" placeholder="Class"/><br><br>
                        <input type="file" name="uploadfile" value="" id="choose-file"/>
                        <input type="submit" name="submit" value="submit" id="btn"/>
                    </form>
                <div>
        </div>
    </div>
</div>
</div>



 <?php
        $query = "SELECT * FROM STUDENT ";
        $data = mysqli_query($conn,$query);
        $total = mysqli_num_rows($data);

        if($total != 0)
        {
        ?>
        <div class="display">
        <?php

            while($result = mysqli_fetch_assoc($data))
            {
            echo "<div class='single-div'>
                        <p id='id'>".$result['rollno']."<p><br>
                        <h3 id='name'>" .$result['studentname']."<h3><br>
                        <p id='img'><a href='$result[picsource]'><img src='".$result['picsource']."' height='300' width='300'></a><p><br>
                        <p id='class'>" .$result['class']."<p><br>
                        <span id='update'><a href='update.php? rn=$result[rollno]& sn=$result[studentname]& cn=$result[class]'>Update</a><span>
                        <span id='delete'><a href='delete.php? rn=$result[rollno]& sn=$result[studentname]& cn=$result[class]' onclick='return checkdel()'>Delete</a><span>
                 </div> ";
            }
        }

        else{
            echo "no record found";
        }
        
    ?>

    </div>
      </div>

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
function checkdel(){
    return confirm("Are you sure you want to delete this data?")
}
let mainNav = document.getElementById('js-menu');
let navBarToggle = document.getElementById('js-navbar-toggle');

navBarToggle.addEventListener('click', function () {
  mainNav.classList.toggle('active');
});


var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>