<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>

<?php
  if(isset($_POST['submit']))
  {
      $name = $_FILES['upload']['name'];
      $size = $_FILES['upload']['size'];
      $type =  $_FILES['upload']['type'];

      $location = "uploads/".$name;
if($type=="images/jpeg" || $type=="images/jpg" ||  $type=="images/png"  || $type=="images/gif" )
{
      if(move_uploaded_file($_FILES["upload"]["tmp_name"], $location)) {
        echo "File Uploaded";
        echo "<img src=$location width=100px>";
  }
  else{
      echo "Something wrong uploading the imageds";
  }
}
else{
    echo "Only Accepts jpeg or jpg or png or gif";
}
}
?>
<form method="POST" name="imageUpload" action="" enctype="multipart/form-data">
<input type="file" name="upload" />
<input type="submit" name="submit" value="Upload"/>
</form>
    
</body>
</html>