<?php
function calnetpay($sal)
{
  $da=0.5*$sal;
  $hra=0.1*$sal;
  $medical=0.4*$sal;
  $gross_salary=$sal+$hra+$medical;
  $insurance=0.07*$gross_salary;
  $pf=0.05*$gross_salary;
  $deduction=$insurance+$pf;
  $net_salary=$gross_salary-$deduction;
  return $net_salary;
}
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practical-3(ii)</title>
</head>
<body>
    <form action="p3-2.php" method="post">
        <label>salary:</label>
        <input type="text" name="salary" require>
        <input type="submit" name="submit" value="calculate">
    </form>
</body>
</html>
<?php
 if(isset($_POST["submit"]))
 {
    $salary=$_POST["salary"];
    echo calnetpay($salary);
 }
?>