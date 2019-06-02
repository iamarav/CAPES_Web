<?php
include('company/ctop.php');
include('../dbconn.php');
include("redirect.php");

$jid=$_GET['id'];

$querydel="DELETE FROM jobs WHERE id='$jid'";
if(mysqli_query($conn,$querydel))
{
?>
<script>
alert("Job has been delete successfully");
window.open("delete-job.php","_self");
</script>
<?php

}
else
{
    ?>
    <script>
    alert("action failed");
    window.open("delete-job.php","_self");
    </script>
    <?php
}

?>
<?php
include('applicant/lbot.php');
?>