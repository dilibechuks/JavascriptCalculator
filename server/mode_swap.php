<?php
session_start();
if(isset($_GET['new_mode'])){
    $_SESSION['mode'] = $_GET['new_mode'];
}

