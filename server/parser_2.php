<?php
session_start();
include("init.php");

class UserLogin {
  private $init;

  public function __construct($init) {
    $this->init = $init;
  }
  
  public function loginUser($email, $password) {
    if (strlen($email) < 1 || strlen($password) < 1) {
      echo "Enter valid details";
      exit;
    }

    $query = mysqli_query($this->init, "CALL login_user('$email', '$password')");
    $result = mysqli_fetch_assoc($query);
    if ($result['success'] == 1) {
      $_SESSION['user'] = $email;
      echo "Successful";
      exit;
    } else {
      echo "Wrong Info";
    }
  }
}

$userLogin = new UserLogin($init);
$userLogin->loginUser($_POST['email_2'], $_POST['password_2']);
?>
