<?php
session_start();
if(isset($_SESSION['cid']))
{

    

    
        header("location:user/dashc.php?usercategory=".$_SESSION['usercategory']."&id=".$_SESSION['cid']);



}
if(isset($_SESSION['uid']))
{

    

    
        header("location:user/dash.php?usercategory=".$_SESSION['usercategory']."&id=".$_SESSION['uid']);



}




if(isset($_SESSION['aid']))
{
header("location:admin/addash.php");
}
?>