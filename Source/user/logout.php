<?php

session_start();
if((isset($_SESSION['uid']) || isset($_SESSION['cid'])) && isset($_SESSION['usercategory']))
{
    session_destroy();
    ?>
    <script>alert("Logged Out Successfully");</script>
    
    <?php
    header('location:../signin.php');
}
?>