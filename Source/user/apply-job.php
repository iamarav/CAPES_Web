<?php
    include('applicant/ltop.php');
    require_once('../dbconn.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    else{
        echo 'No ID Defined. Error (3)';
        exit;
    }

   $query = "SELECT * from jobs where id='".$id."'";
    $exec = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($exec);
?>

<!--<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Apply for Job</title>

    Bootstrap core CSS 
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    Custom styles for this template 
    <link href="css/blog-post.css" rel="stylesheet">

  </head>

  <body>

    Navigation 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">CAPES</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
-->
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">
            <br><br>
          <!-- Title -->
          <h1 class="mt-4"><?= $row['title']; ?></h1>

          <!-- Author -->
          <p class="lead">
            by
<!--            <a href="#"></a>--><?= $row['company']; ?>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Posted on <?= $row['posted_on']; ?></p>

          <hr>

          <!-- Post Content -->
          <p class="lead"><?= $row['aboutc']; ?></p>

            <form action="actions/apply-job.php" method="post">
            <input type="hidden" value="<?= $id ?>" name="jobid">
            <input type="submit" value="Confirm" name="submit" class="btn btn-primary">
            
            </form>
<br>
<br>

          </div>


        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; CAPES | DOZY 2018</p>
      </div>
      <!-- /.container -->
    </footer>

   <?php
   include('applicant/lbot.php');
   ?>