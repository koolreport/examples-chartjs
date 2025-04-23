<?php
require_once "../../../common.php";
require_once "MyReport.php";
$report = new MyReport;
$report->run();
$report->render();
?>

<html>

<head>
    <title>
        Legend Positions
    </title>
</head>

<body>
</body>

</html>