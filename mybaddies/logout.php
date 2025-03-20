<?php

session_start();
if(isset($_SESSION['mybaddies_user_id'])){

   $_SESSION['mybaddies_user_id'] == NULL;
   unset($_SESSION['mybaddies_user_id']);

}
header("Location: login.php");



die;