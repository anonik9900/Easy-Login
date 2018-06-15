# Easy-Login
simple login written in php

# How To Use ?

<ul>
  <li>Download the latest version from the release page.<li>
  <li>Select your preferite according to language (italian-Russian-Francais-English).</li>
  <li>Put the login.php and page.php into your web-site directory.</li>
  <li>Edith the .php files with your preferences.</li>
  <li>Link the files via <code><&lt;a></code> tag, with <code>nofollow attribute.</code></li>
  <li>Ex : <code>&lt;a href="login.php" rel="nofollow">Login-Page&lt;/a></code></li>
 </ul>
 
 # What should I change?

<h2>Login-Password :</h2>
<ul>
  <li><code>$password="hello";</code></li>
  Change with anoter password:
  <li><code>$password="ServerCom@plicate_p4$$word";</code></li>
</ul>

<hr>

<h2>Protected page Path :</h2>
<ul>
  <li><code>header("Location: page.php");</code></li>
  Change with for example your Admin Page:
  <li><code>header("Location: pannel/admin.html");</code></li>
 </ul>
 
 <hr>
 
 <h2>Logout-Function :</h2>
 <p>After your session is complete you need a Logout function to disconnect your account.</p>
 <br>
 <ul>
  <li>Add this code into your Protecter page (html)</li>
  <li>
    <code>&lt;form name="logout" action="your-login-page-path/login.php" method="post"> </code><br>
  <li><code>&lt;input type="hidden" name="logout" value="esci"/> </code><br> </li>
    <code>&lt;input type="submit" value="Logout"/>  </code><br>
    <code>&lt;/form> </code>
  </li>
  </ul>




