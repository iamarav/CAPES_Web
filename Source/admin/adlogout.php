<?php

session_start();
if(isset($_SESSION['aid']))
{
    session_destroy();
    ?>
    <script>alert("Logged Out Successfully");</script>
    
    <?php
    header('location:../adsignin.php');
}
?>