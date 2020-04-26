<?php

    include ("connection.php");
    error_reporting(0);

?>


<html>
<head>
</head>
<body>
    <form action="" method="GET">
        Roll No:<input type="text" name="rollno" value="<?php echo $_GET['rn']; ?>"/><br><br>
        Name :<input type="text" name="studentname" value="<?php echo $_GET['sn']; ?>"/><br><br>
        Class :<input type="text" name="class" value="<?php echo $_GET['cn']; ?>"/><br><br>
        <input type="submit" name="submit" value="Update"/>
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
            echo "<font color = 'blue'> press the button to save the changes";
        }

    ?>

</body>
</html>