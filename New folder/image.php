<?php
error_reporting(0);
?>

<html>
<body>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="uploadfile" value=""/>
        <input type="submit" name="submit" value="uploadfile"/>
    </form>

</body>
</html>

<?php

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];

$folder = "student/".$filename;
move_uploaded_file($tempname,$folder);
echo "<img src='$folder' height='250' width='200'/>";

?>