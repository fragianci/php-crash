<?php

if(isset($_POST['submit'])) {
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
  echo $name;
  echo $age;
}


?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <div>
    <label for="name">Name</label>
    <input type="text" name="name">
  </div>
  <div>
    <label for="age">Age</label>
    <input type="number" name="age">
  </div>
  <input type="submit" value="Submit" name="submit">
</form>