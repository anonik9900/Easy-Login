<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}
?>

<html>
<head>
</head>
<body>


<form name="logout" action="login.php" method="post">
<input type="hidden" name="logout" value="esci"/>
<input type="submit" value="Logout"/>
</form>


</body>
</html>
