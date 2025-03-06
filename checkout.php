<!DOCTYPE html>
<html>
<head>
<title>Fila Hrvatska</title>
<link rel="stylesheet" href="style.css">

<style>
  .container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
  margin-left:600px;
  margin-right:600px;
  margin-top:50px;
}

input[type=text] {
  width: 90%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #0b1f3f;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}


a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

body {min-height:2000px}
</style>
</head>
<body>

    <ul>
        <li><a href="pocetna.php">Home</a></li>
        <li><a href="men.php">Men</a></li>
        <li><a href="women.php">Women</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a class="active" href="about.php">About</a></li>
        <img src="img/fila.png" style="float:right; padding-top:11px; padding-right:11px;">
  <li style="float:right; padding-right:5px;"><a href="index.php">Registration/Log-In</a></li>
      </ul>

      <div class="container">
  <form action="success.php">
    <div class="row">
      <div class="col-50">
        <h3>Billing Address</h3>
        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
        <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
        <label for="email"><i class="fa fa-envelope"></i> Email</label>
        <input type="text" id="email" name="email" placeholder="john@example.com">
        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
        <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
        <label for="city"><i class="fa fa-institution"></i> City</label>
        <input type="text" id="city" name="city" placeholder="New York">

        <div class="row">
          <div class="col-50">
            <label for="state">State</label>
            <input type="text" id="state" name="state" placeholder="NY">
          </div>
          <div class="col-50">
            <label for="zip">Zip</label>
            <input type="text" id="zip" name="zip" placeholder="10001">
          </div>
        </div>
      </div>

      <div class="col-50">
        <h3>Payment</h3>
        <label for="fname">Accepted Cards</label>
        <div class="icon-container">
          <img src="img/card_img.png">
        </div>
        <label for="cname">Name on Card</label>
        <input type="text" id="cname" name="cardname" placeholder="John More Doe">
        <label for="ccnum">Credit card number</label>
        <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
        <label for="expmonth">Exp Month</label>
        <input type="text" id="expmonth" name="expmonth" placeholder="September">
        <div class="row">
          <div class="col-50">
            <label for="expyear">Exp Year</label>
            <input type="text" id="expyear" name="expyear" placeholder="2018">
          </div>
          <div class="col-50">
            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" placeholder="352">
          </div>
        </div>
      </div>
      
    </div>
    <label>
      <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
    </label>
    <input type="submit" value="Continue to checkout" class="btn">
  </form>
</div>
</div>
</div>

<footer id="footer">Fila Sports Group LTD.</footer>
</body>
</html>





