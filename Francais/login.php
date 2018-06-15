<?php
session_start();
$password="bonjour";     // Votre mot de passe dans "" dans ce cas est "bonjour"
if (isset($_SESSION['login'])) {
    if (isset($_POST['logout'])) {
        unset($_SESSION['login']);
        $messaggio = "Déconnexion réussie! Au revoir!";
    } else {
        header("Location: page.php");
    }
} else {
    if (isset($_POST['password'])) {
        if ($_POST['password'] == $password) {
            $_SESSION['login'] = "verificata";
            header("Location: page.php");
        } else {
            $messaggio = "Erreur: mot de passe incorrect!";
        }
    }
}
?>

<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body{
    border: solid 4px black;
    margin: 300px /*sinistra*/800px 500px 800px/*destra*/;
  }
  </style>
</head>
<body>

<br><br><h2 align="center">Server Login<i class="fa fa-server fa-fw"></i></h2>
<div align="center">
  <div id="login2">
<form name="login" action="login.php" method="post">
<input type="password" name="password" value=""/> &nbsp; <input type="submit" value="Enter"/>
</form>
</div>
</div>

<?php
if(isset($messaggio)) {
    echo $messaggio;
    unset($messaggio);
}
?>


</body>
</html>
