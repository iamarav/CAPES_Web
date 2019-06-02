<?php 
// require_once('./session.php');
require_once('./ext/constants.php');

?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><?= $projtitle ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-2">
        <a class="nav-link" href="profile.php">Profile</a>
      </li>
      <li class="nav-item mx-2">
        <a class="nav-link" href="dash.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item mx-2">
        <a class="nav-link" href="testi.php">Online Test</a>
      </li>
      <li class="nav-item mx-2">
        <a class="nav-link" href="formula.php">Important Formulas</a>
      </li>     
      <li class="nav-item mx-2">
        <a class="nav-link" href="logout.php">Log Out</a>
      </li>
      </ul>
        </div>
      </div>
    </nav>