<?php include('functions.php');?>
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
      $name1 = $_FILES['uploadme']['name'];
      $size = $_FILES['uploadme']['size'];
      $type1 =  $_FILES['uploadme']['type'];

      $location = "uploads/".$name1;
if($type1=="images/jpeg" || $type1=="images/jpg" ||  $type1=="images/png"  || $type1=="images/gif" )
{
      if(move_uploaded_file($_FILES["uploadme"]["tmp_name"], $location)) {
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

<?php categoryDropDown(); ?>

<input type="file" name="uploadme" />
<input type="submit" name="submit" value="Upload"/>
</form>
    
</body>
</html>