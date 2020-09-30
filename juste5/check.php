<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: ../demo/login.php");
exit(); }

echo $_SESSION['username'];
?>
<html>
<p>the page to redirected to after login</p>
</html>
