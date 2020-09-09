<?php
$link = mysqli_connect(
    "localhost",
    "s106021051",
    "wAtRsge9",
    "s106021051"
);

if (!$link) {
    echo "ERROR : Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error number:" . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error:" . mysqli_connect_error() . PHP_EOL;
    exit;
}

$link->set_charset("utf8");