<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-color: white;
}
table {
  font-family: Poppins-Regular;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

@font-face {
  font-family: 'Poppins-Regular';
  src: url('fonts/Poppins-Regular.ttf');
  src: local('fonts/Poppins-Regular'), url('fonts/Poppins-Regular.ttf') format('ttf'), url('fonts/Poppins-Regular.ttf') format('truetype');
}
.poppins {
  font-family: 'Poppins-Regular';
  color:white;
  font-size: large;
  font-weight: bolder;
}

</style>
</head>
<body>
<center>
<h2>KONTAKT</h2>
</center>
<table>
  <tr>
    <th>Ime:</th>
    <th>E-mail:</th>
    <th>Predmet:</th>
    <th>Poruka:</th>
  </tr>
  <tr>
    <td> <?php echo $_POST["ime"]; ?></td>
    <td> <?php echo $_POST["email"]; ?></td>
    <td> <?php echo $_POST["predmet"]; ?></td>
    <td> <?php echo $_POST["poruka"]; ?></td>
    
  </tr>
 
</table>

</body>
</html>
