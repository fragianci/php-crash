<?php
  /* ----------- File upload ---------- */


  
  if(isset($_POST['submit'])) {
   $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');
   // Check if file was uploaded
   if(!empty($_FILES['upload']['name'])) {
    $file_name = $_FILES['upload']['name'];
    $file_size = $_FILES['upload']['size'];
    $file_tmp = $_FILES['upload']['tmp_name'];
    $target_dir = 'uploads/'.$file_name;
    // Get file extension
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));
    // echo $file_ext;

    // Validate file type/extension
    if(in_array($file_ext, $allowed_ext)) {
      // Validate file size
      if($file_size <= 1000000) { // 1000000 bytes = 1MB
        // Upload file
        move_uploaded_file($file_tmp, $target_dir);

        // Success message
        echo '<p style="color: green;">File uploaded!</p>';
      } else {
        echo '<p style="color: red;">File too large!</p>';
      }
    } else {
      $message = '<p style="color: red;">Invalid file type!</p>';
    }
   } else {
     $message = '<p style="color: red;">Please choose a file</p>';
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