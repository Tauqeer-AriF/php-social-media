<?php
       include("connection.php");
       $rollno = $_GET['rn'];
       $query = "DELETE FROM STUDENT WHERE ROLLNO='$rollno' ";
       $data = mysqli_query($conn, $query);

       if($data)
       {
            // echo "your selected db is deleted <a href='display.php'>check it out</a>";
            ?>
            <META HTTP-EQUIV='refresh' CONTENT="0; URL=http://localhost/jpweb/New folder/index.php">
            <?php
       }
       else{
           echo "<font color = 'red'> process not done";
       }
?>