<?php
// Unlike cookies, sessions are stored on the server

session_start();

// $_SESSION['name'] = 'John';

if(isset($_POST['submit'])) {
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = $_POST['password'];

  if($username == 'john' && $password == 'password') {
    $_SESSION['username'] = $username;
    header('Location: /php-crash/extras/dashboard.php');
  } else {
    echo 'Incorrect username or password';
  }
}

?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <div>
    <label for="username">Username</label>
    <input type="text" name="username">
  </div>
  <div>
    <label for="password">Password</label>
    <input type="password" name="password">
  </div>
  <input type="submit" value="Submit" name="submit">
</form>