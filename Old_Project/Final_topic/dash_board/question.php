<?php session_start();
if (isset($_SESSION['username'])) {
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="icon" type="image/png" href="assets/img/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

        <title>後臺編輯區</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
        <meta name="viewport" content="width=device-width"/>


        <!-- Bootstrap core CSS     -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>

        <!-- Animation library for notifications   -->
        <link href="assets/css/animate.min.css" rel="stylesheet"/>

        <!--  Light Bootstrap Table core CSS    -->
        <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="assets/css/demo.css" rel="stylesheet"/>


        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet"/>

    </head>
    <body>

    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

            <!--

                Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
                Tip 2: you can also add an image using data-image tag

            -->

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        快捷列
                    </a>
                </div>

                <ul class="nav">
                    <li>
                        <a href="dashboard.php">
                            <i class="pe-7s-graph"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="question.php">
                            <i class="pe-7s-light"></i>
                            <p>Course</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Dashboard</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="../index.html">
                                    <p>Log out</p>
                                </a>
                            </li>
                            <li class="separator hidden-lg"></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <?php include ('../Login/db_connect_info.php');
            $sql = "SELECT `id`,`content` FROM `teacher_course_info`";
            $result = mysqli_query($link,$sql);
            $rowcount=mysqli_num_rows($result);
            for ($i = 1 ; $i <= $rowcount ; $i++) {
            $sql  = "SELECT `id`,`content` FROM `teacher_course_info` WHERE `id` = '$i'";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_row($result);
            ?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">

                                <div class="header">
                                    <h4 class="title">Course</h4>
                                    <p class="category">Setting From Below</p>
                                </div>
                                <div class="content">

                                    <form action="question_backstage.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $row[0]?>">
                                        <label>
                                            內容 :
                                            <textarea rows="4" cols="50" name="content">
<?php echo $row[1];?>
                                                </textarea>
                                        </label>
                                        <button class="login100-form-btn">
                                            確認
                                        </button>
                                    </form>
                                    <form action="question_backstage.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row[0];?>" >
                                        <button>刪除</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        <div class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card">

                                            <div class="header">
                                                <h4 class="title">Course</h4>
                                                <p class="category">Add From Below</p>
                                            </div>

                                            <div class="content">
                                                <form action="question_backstage.php" method="post">
                                                    <input type="hidden" value="<?php echo $rowcount+1?>" name="add_id">
                                                    <label>
                                                        內容 :
                                                        <textarea rows="4" cols="50" name="add_content"></textarea>
                                                    </label>
                                                    <button class="login100-form-btn">
                                                        確認
                                                    </button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                    <footer class="footer">
                                        <div class="container-fluid">
                                            <nav class="pull-left">
                                                <ul>
                                                    <li>
                                                        <a href="dashboard.php">
                                                            首頁
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="../index.html">
                                                            部落格
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                            <p class="copyright pull-right">
                                                Copyright &copy;
                                                <script>document.write(new Date().getFullYear())</script>
                                                106021051薛佾展
                                            </p>
                                        </div>
                                    </footer>

                                </div>
                            </div>


    </body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            demo.initChartist();

            $.notify({
                icon: 'pe-7s-gift',
                message: "歡迎來到薛佾展的後台編輯區"

            }, {
                type: 'info',
                timer: 4000
            });

        });
    </script>

    </html>

    <?php
} else {
    ?>
    <p>你沒有權限觀看此頁面</p>
    <meta http-equiv="refresh" content="1;url=../index.html" />
    <?php
    echo $_SESSION['username'];
}