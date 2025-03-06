<!DOCTYPE html>
<html>
<head>
<title>Fila Hrvatska</title>
<link rel="stylesheet" href="style.css">
<style>
.center{
    text-align:center;
    margin-top:50px;
}
</style>
</head>
<body>

    <ul>
        <li><a href="pocetna.php">Home</a></li>
        <li><a href="men.php">Men</a></li>
        <li><a href="women.php">Women</a></li>
        <li><a class="active" href="contact.php">Contact</a></li>
        <li><a href="about.php">About</a></li>
        <img src="img/fila.png" style="float:right; padding-top:11px; padding-right:11px;">
  <li style="float:right; padding-right:5px;"><a href="index.php">Registration/Log-In</a></li>
      </ul>
<div class="center">
      <h2>KONTAKT:</h2><br>
			
            <div class="wrapper">
                
        
                <form class="form2" action="kontakt_unos.php" method="post"  onsubmit="return provjeriFormu(this)">
        
                    <div class="input">
                        <div class="inputtext">Ime: </div>
                        <div class="inputcontent">
        
                            <input type="text" name="ime" />
        
                        </div>
                    </div>
        
                    <div class="input">
                        <div class="inputtext">E-mail: </div>
                        <div class="inputcontent">
        
                            <input type="text" name="email" />
        
                        </div>
                    </div>
                    
                     <div class="input">
                        <div class="inputtext">Predmet: </div>
                        <div class="inputcontent">
        
                            <input type="predmet" name="predmet" />
        
                        </div>
                    </div>
                    
                    <div class="input">
                            <div class="inputtext">Poruka: </div>
                            <div class="inputcontent">
        
                                <input type="text" name="poruka" value=""  />
        
                            </div>
                        </div>
                
                    <div class="buttons">
        
                        <input class="buttons" type="submit" name="register" value="Pošalji" />
        
        
                    </div>
        
                </form>
        
            </div>	
</div>
        

<footer id="footer">Fila Sports Group LTD.</footer>
</body>
</html>





