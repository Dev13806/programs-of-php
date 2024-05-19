<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Enter first letter in capital</h2>
    <form action="p4-1.php" method="post">
        car name:
        <input type="text" name="car">
        <br>
        <input type="submit" name="submit" value="search">
    </form>
</body>
</html>
<?php
 if(isset($_POST["submit"]))
 {
  $car=$_POST["car"];
  if($car=="Safari" || $car=="Nexon" || $car=="Tigor" || $car=="Tiagon")
  {
    echo "car company:Tata";
  }
  elseif($car=="XUV700" || $car=="XUV300" || $car=="Bolero")
  {
    echo "car company:Mahindra";
  }
  elseif($car=="i20" || $car=="Verna" || $car=="Venue" || $car=="Creta")
  {
    echo "car company:Hyundai";
  }
  elseif($car=="Swift" || $car=="Alto" || $car=="Baleno" || $car=="Brezza")
  {
    echo "car company:Suzuki";
  }
  else
  {
    echo "plz enter a car name";
  }
}
?>