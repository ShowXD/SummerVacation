<?php
include('fun.inc.php');
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
                    <h4>
                        <?php
                        $n = $_POST['n'];
                        $m = $_POST['m'];
                        echo "<table border='1'>";
                        for ($i = 1 ; $i <= $n ; $i++) {
                            echo "<tr>";
                            for ($j = 1 ; $j <= $m ; $j++) {
                                echo "<td>" . $i * $j . "</td>";
                            }
                            echo "<tr/>";
                        }
                        ?>
                    </h4>
                </a>
            </div>
            <hr>
        </div>
    </div>
</div>
<hr>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/clean-blog.min.js"></script>

</body>

</html>

