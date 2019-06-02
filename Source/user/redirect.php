<?php
session_start();

if((isset($_SESSION['uid'])&&isset($_SESSION['usercategory'])) ||(isset($_SESSION['cid'])&&isset($_SESSION['usercategory']))  )
{

}
else
{
    header("location:../signin.php");
    exit;
}
?>
