<?php
       include ("connection.php");

       
        $rn = $_POST['rollno'];
        $sn = $_POST['studentname'];
        $cn = $_POST['class'];
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];

        $folder = "student/".$filename;
        move_uploaded_file($tempname,$folder);

        $query = "INSERT INTO STUDENT VALUES ('$rn','$sn','$cn','$folder')";
        $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "data has been insrted";
        }



?>