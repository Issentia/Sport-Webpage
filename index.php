<!DOCTYPE html>
<html>
<head>
<title>Fila Hrvatska</title>
<link rel="stylesheet" href="style.css">    
</head>
<body>

    <ul>
        <li><a href="pocetna.php">Home</a></li>
        <li><a href="men.php">Men</a></li>
        <li><a href="women.php">Women</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About</a></li>
        <img src="img/fila.png" style="float:right; padding-top:11px; padding-right:11px;">
  <li style="float:right; padding-right:5px;"><a class="active" href="index.php">Registration/Log-In</a></li>
      </ul>

      <form action="pocetna.php" method="post">

<div class="container">
<label for="name"><b>Name</b></label>
  <input type="name" placeholder="Enter Name" name="Name" required>
<br>
<label for="surname"><b>Surname</b></label>
  <input type="surname" placeholder="Enter Surname" name="surname" required>
<br>
<label for="email"><b>Email</b></label>
  <input type="email" placeholder="Enter Email" name="email" required>
<br>
  <label for="username"><b>Username</b></label>
  <input type="username" placeholder="Enter Username" name="username" required>
<br>
  <label for="psw"><b>Password</b></label>
  <input type="password" placeholder="Enter Password" name="psw" required>
<br>
<label for="adress"><b>Adress</b></label>
  <input type="adress" placeholder="Enter Adress" name="adress" required>
<br>     
  <button type="submit">Login</button>
  <label>
    <input type="checkbox" checked="checked" name="remember"> Remember me
  </label>
</div>
</form>

<footer id="footer">Fila Sports Group LTD.</footer>
</body>
</html>





