<!DOCTYPE html>
<html>
<head>
<title>Fila Hrvatska</title>
<link rel="stylesheet" href="style.css">

<style>
  table, th, td, tr {
     border: 1px solid #EDE9E8;
     border-collapse: collapse;
     margin-left:250px;
	 margin-right:250px;
}

td {
 padding:5px;
}

input{
  margin-top:12.5px;
  margin-left:5px;
}
</style>
</head>
<body>

    <ul>
        <li><a href="pocetna.php">Home</a></li>
        <li><a class="active" href="men.php">Men</a></li>
        <li><a href="women.php">Women</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About</a></li>
        <img src="img/fila.png" style="float:right; padding-top:11px; padding-right:11px;">
  <li style="float:right; padding-right:5px;"><a href="index.php">Registration/Log-In</a></li>
        <li><form><input type="text" id="myInput" onkeyup="myFunction()" autocomplete="off" name="search"></form><li>
        </ul>
      
      <br><br><br>

      <table id="myTable">
        <tr class="header">
          <th style="width:60%; padding:10px;">NAME</th>
          <th style="width:40%; padding:10px;">IMAGE</th>
          <th style="width:40%; padding:10px;">PRICE</th>
          <th style="width:60%; padding:10px;">PURCHASE</th>
        </tr>
        <tr>
          <td>Grant Hill 2 Game Break
          </td>
          <td><img src="img/men/shoe1.jpg" width="68" height="102"></td>
          <td>109.99$</td>
          <td><form action="checkout.php"><input type="submit" value="PURCHASE" /></form></td>
        </tr>
        <tr>
          <td>Men's MB Dark Blue
          </td>
          <td><img src="img/men/shoe2.jpg" width="68" height="102"></td>
          <td>109.99$</td>
          <td><form action="checkout.php"><input type="submit" value="PURCHASE" /></form></td>
        </tr>
        <tr>
          <td>Grant Hill 2 Purple
          </td>
          <td><img src="img/men/shoe3.jpg" width="68" height="102"></td>
          <td>109.99$</td>
          <td><form action="checkout.php"><input type="submit" value="PURCHASE" /></form></td>
        </tr>
        <tr>
          <td>Grant Hill 2 Green
          </td>
          <td><img src="img/men/shoe4.jpg" width="68" height="102"></td>
          <td>109.99$</td>
          <td><form action="checkout.php"><input type="submit" value="PURCHASE" /></form></td>
        </tr>
        <tr>
          <td>Oakmond Tr Mid
          </td>
          <td><img src="img/men/shoe5.jpg" width="68" height="102"></td>
          <td>109.99$</td>
          <td><form action="checkout.php"><input type="submit" value="PURCHASE" /></form></td>
        </tr>
        <tr>
          <td>Men's MB Blue
          </td>
          <td><img src="img/men/shoe6.jpg" width="68" height="102"></td>
          <td>109.99$</td>
          <td><form action="checkout.php"><input type="submit" value="PURCHASE" /></form></td>
        </tr>
        <tr>
          <td>Men's MB Turqoise
          </td>
          <td><img src="img/men/shoe7.jpg" width="68" height="102"></td>
          <td>109.99$</td>
          <td><form action="checkout.php"><input type="submit" value="PURCHASE" /></form></td>
        </tr>
        <tr>
          <td>Men's MB Faint Yellow
          </td>
          <td><img src="img/men/shoe8.jpg" width="68" height="102"></td>
          <td>109.99$</td>
          <td><form action="checkout.php"><input type="submit" value="PURCHASE" /></form></td>
        </tr>
        <tr>
          <td>Grant Hill 2 Faint Yellow
          </td>
          <td><img src="img/men/shoe9.jpg" width="68" height="102"></td>
          <td>109.99$</td>
          <td><form action="checkout.php"><input type="submit" value="PURCHASE" /></form></td>
        </tr>
        <tr>
          <td>Original Fitness Faint Yellows
          </td>
          <td><img src="img/men/shoe10.jpg" width="68" height="102"></td>
          <td>109.99$</td>
          <td><form action="checkout.php"><input type="submit" value="PURCHASE" /></form></td>
        </tr>
        <tr>


        <script>
    function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }
    }
    </script>
<footer id="footer">Fila Sports Group LTD.</footer>
</body>
</html>