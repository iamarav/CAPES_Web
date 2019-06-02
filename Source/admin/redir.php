<?php

session_start();

if(isset($_SESSION['aid']))
{
   // echo $_SESSION['uid'];
}
else
{   header('location:../adsignin.php');
      exit;
}
?>