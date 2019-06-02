<?php
include("applicant/ltop.php");
include("../dbconn.php");
include("redirect.php");
?>

<div class="alert alert-warning mt-2 text-center" role="alert">
  <div style="font-family:monospace;font-size:2em">Online Test Instructions</div>
  </div>

<div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-4"></div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">

<div class="alert alert-info mt-4 text-center" role="alert">
<h4>Instruction</h4>
<ul class="text-left mt-4">
<li>Total number of questions : 20.</li>
<li>Time alloted : 20 minutes.</li>
<li>Each question carry 1 mark, no negative marks.</li>
<li>DO NOT refresh the page.</li>
 <li>If you dont click any answer, the corresponding marks for that question will be marked <strong>ZERO</strong> and further changes cannot be undone.</li>
</ul>
<a href="ontest.php" class="btn btn-outline-success btn-block mt-4">Start Test</a>
  </div>
  
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-4"></div>

</div>

<?php
include('applicant/lbot.php');
?>