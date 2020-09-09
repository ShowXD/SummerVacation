<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>呂威甫 Wei-Fu Lu 的個人網站</title>

    <!-- 從Bootstrap抓CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- 導入客製化文字 -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- 導入客製化樣式 -->
    <link href="css/business-casual.min.css" rel="stylesheet">

  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">Course Information</span>
      <span class="site-heading-lower">相關課程</span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">導覽列</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="profile.php">Profile</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="thesis.html">Thesis</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="course.php">Course</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="Login/login.html">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Education</span>
                <span class="section-heading-lower">Course Information</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <li class="list-unstyled-item list-hours-item d-flex">
                  No.
                  <span class="ml-auto">Content</span>
                </li>
                  <?php include ('Login/db_connect_info.php');
                  $sql = "SELECT `id`,`content` FROM `teacher_course_info`";
                  $result = mysqli_query($link,$sql);
                  $rowcount=mysqli_num_rows($result);
                  for ($i = 1 ; $i <= $rowcount ; $i++) {
                      $sql  = "SELECT `id`,`content` FROM `teacher_course_info` WHERE `id` = '$i'";
                      $result = mysqli_query($link, $sql);
                      $row = mysqli_fetch_row($result);
                      ?>
                      <li class="list-unstyled-item list-hours-item d-flex">
                          NO.<?php echo $row[0];?>
                          <span class="ml-auto"><?php echo $row[1];?></span>
                      </li>
                  <?php
                  }
                  ?>
<!--                <li class="list-unstyled-item list-hours-item d-flex">-->
<!--                  Monday-->
<!--                  <span class="ml-auto">7:00 AM to 8:00 PM</span>-->
<!--                </li>-->
                <!--<li class="list-unstyled-item list-hours-item d-flex">-->
                  <!--Tuesday-->
                  <!--<span class="ml-auto">7:00 AM to 8:00 PM</span>-->
                <!--</li>-->
                <!--<li class="list-unstyled-item list-hours-item d-flex">-->
                  <!--Wednesday-->
                  <!--<span class="ml-auto">7:00 AM to 8:00 PM</span>-->
                <!--</li>-->
                <!--<li class="list-unstyled-item list-hours-item d-flex">-->
                  <!--Thursday-->
                  <!--<span class="ml-auto">7:00 AM to 8:00 PM</span>-->
                <!--</li>-->
                <!--<li class="list-unstyled-item list-hours-item d-flex">-->
                  <!--Friday-->
                  <!--<span class="ml-auto">7:00 AM to 8:00 PM</span>-->
                <!--</li>-->
                <!--<li class="list-unstyled-item list-hours-item d-flex">-->
                  <!--Saturday-->
                  <!--<span class="ml-auto">9:00 AM to 5:00 PM</span>-->
                <!--</li>-->
              </ul>
              <!--<p class="address mb-5">-->
                <!--<em>-->
                  <!--<strong>1116 Orchard Street</strong>-->
                  <!--<br>-->
                  <!--Golden Valley, Minnesota-->
                <!--</em>-->
              <!--</p>-->
              <p class="mb-0">
                <small>
                  <em>Call Anytime</em>
                </small>
                <br>
                (317) 585-8468
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; 106021051薛佾展</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

</html>
