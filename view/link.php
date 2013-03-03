<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Chedly
 * Date: 03/03/13
 * Time: 15:46
 * To change this template use File | Settings | File Templates.
 */
if (!isset ($_GET["k"])){
    header("Location:/suplink/view");
}else{
    $key = $_GET['k'];

}
echo $key;
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../css/miniproject.css" />

    <title>About Suplink</title>
</head>


<body>
<div class="navbar navbar-static-top">
    <div class="navbar-inner">
        <a class="brand" href="register.php">SupLink</a>
        <ul class="nav pull-right">
            <li><a href="login.php">Login</a></li>
            <li class="divider-vertical"></li>
            <li><a href="register.php">Register</a></li>
            <li class="divider-vertical"></li>
            <li><a href="about.php">About</a></li>
        </ul>
    </div>
</div>
<div class="container">
    <div class="jumbotron">
        <h1>SupLink</h1>
        <p class="lead">Another URL shortener</p>
        <a class="btn btn-large btn-success" href="register.php">Sign up today</a>
    </div>
    <hr>
</div>
<!-- (TIP) Google returns the latest version of jquery in the 1 series (from 1.0 to 1.9.9) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</body>

</html>