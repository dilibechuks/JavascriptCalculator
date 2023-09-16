<?php
session_start();
include("init.php");

class UserRegistration {
  private $init;

  public function __construct($init) {
    $this->init = $init;
  }

  public function registerUser($email, $username, $password) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    } else {
      echo "Invalid email address";
      exit;
    }
    if (strlen($password) < 5) {
      echo "Password should be up to 5 characters";
      exit;
    }
    $query = mysqli_query($this->init, "CALL register_user('$email', '$username', '$password')");
    $result = mysqli_fetch_assoc($query);
    if ($result['success'] == 1) {
      $_SESSION['user'] = $email;
      echo "Account created successfully";
      exit;
    } else {
      echo "Account already exists";
      exit;
    }
  }
}


$userRegistration = new UserRegistration($init);
$userRegistration->registerUser($_POST['email'], $_POST['username'], $_POST['password']);


?>
