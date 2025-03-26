<?php

if(isset($_POST['submit'])){
  $allowedExt = ['jpg', 'jpeg', 'png'];
  if(!empty($_FILES['upload']['name'])){
    $fileName = $_FILES['upload']['name'];
    $fileSize = $_FILES['upload']['size'];
    $fileTmp = $_FILES['upload']['tmp_name'];
    $targetDir = 'uploads/'.$fileName;
    $fileExt= explode('.',$fileName);
    $fileExt= strtolower(end($fileExt));

    if(in_array($fileExt, $allowedExt)){
      if($fileSize<1000000){
        move_uploaded_file($fileTmp, $targetDir);
        $message = '<p style="color:green;">File uploaded</p>';
      }else{
        $message = '<p style="color:green;">File is too large</p>';
      }
    }else{
      $message = '<p style="color:red;">Invalid file type</p>';
    }
  }else{
    $message = '<p style="color:red;">Choose a file</p>';
  }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File upload</title>
</head>
<body>
  <?php echo $message ?? null; ?>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
    <div>
      <label for="">Select image to upload</label>
      <input type="file" name="upload">
    </div>
    <input type="submit" value="Submit" name="submit">

  </form>
</body>
</html>