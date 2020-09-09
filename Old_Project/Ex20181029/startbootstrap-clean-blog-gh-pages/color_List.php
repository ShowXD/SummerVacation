<?php
include ('fun.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    html_Head();
    ?>
</head>

<body>
    <?php
    navigation_Bar();
    page_Header();
    ?>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
                <a href="">
                    <h2 class="post-title">
                        Man must explore, and this is exploration at its greatest
                    </h2>
                    <h3 class="post-subtitle">
                        Problems look mighty small from 150 miles up
                    </h3>
                </a>
                <h4>
                    <?php
                    echo"<table>";
                    for ($r=1;$r<=255;$r+=10){
                        for ($g=1;$g<=255;$g+=10){
                            echo"<tr>";
                            for ($b=1;$b<=255;$b+=10){
                                if (0.299 * $r + 0.5287 * $g + 0.114 * $b <= 128) {
                                    echo "<td style = background-color:rgb($r,$g,$b);><span style='color: white'> ($r,$g,$b)";
                                } else {
                                    echo "<td style = background-color:rgb($r,$g,$b);><span style='color: black'> ($r,$g,$b)";
                                }
                            }
                            echo "</tr>";
                        }
                    }
                    echo "</table>";
                    ?>
                </h4>
            </div>


            <!-- Bootstrap core JavaScript -->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Custom scripts for this template -->
            <script src="js/clean-blog.min.js"></script>

</body>

</html>

