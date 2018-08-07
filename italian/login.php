<?php
session_start();
$password="la-tua-password";/* inserire su questa riga la password voluta */
$username="il-tuo-username"; //Metti il tuo username qua
if (isset($_SESSION['login'])) {
    if (isset($_POST['logout'])) {
        unset($_SESSION['login']);
        $messaggio = "<p class=\"php\">Logout effettuato con successo! Arrivederci! </p>";
    } else {
        header("Location: server/index.php");
    }
} else {
    if (isset($_POST['password'],$_POST['username'])) {
        if ($_POST['password'] == $password){
        if ($_POST['username'] == $username){
            $_SESSION['login'] = "verificata";
            header("Location: server/index.php");
        } }else {
            $messaggio = "<p class=\"php\"> Errore: password o username non corretti! </p>";
        }
    }
}
?>

<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  html{
  		background-image: url(img/img.jpg);
    	background-size: cover;
    }
    
  body{
    border: solid 4px white;
    margin: 300px /*sinistra*/800px 500px 800px/*destra*/;
    border-image: linear-gradient(to right, red 0%, violet 50%, blue 70%);
    border-image-slice: 1;
    
  }
  	
   h2{
   	color: white;
    font-family: 'arial';
   }
   
   input[type="submit"]{
   	background-color: white;
    color: black;
    font-family: 'arial';
    border: solid 2px black;
    padding: 5px 15px 5px 15px;
    border-image-slice: 1;
   }
   
   input[type="submit"]:hover{
   	border-image: linear-gradient(to right, red 0%, blue 100%);
    border-image-slice: 1;
    background: linear-gradient(to right, red 0%, blue 100%);
    color: white;
    font-weight: bold;
   }
   
   p.php{
   	color: white;
    font-family: 'arial';
    font-size: 20px;
   }
   
   p.userpsw{
   	color: white;
    font-family: 'arial';
    font-size: 15px;
   }

   
  
  	
  </style>
</head>
<body>

<br><br><h2 align="center">Server Login<i class="fa fa-server fa-fw"></i></h2>
<div align="center">
  <div id="login2">
<form name="login" action="login.php" method="post">
<p class="userpsw">Username</p>
<input type="username" name="username" value=""/> <br><br>
<p class="userpsw">Password</p>
<input type="password" name="password" value=""/> <br> <br>
&nbsp; <input type="submit" value="Entra"/>
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
