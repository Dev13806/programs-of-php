<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practical-3(i)</title>
</head>
<body>
    <form action="p3-1.php" method="post">
    <label>number 1</label>
    <input type="text" name="x">
    <br>
    <label>number 2</label>
    <input type="text" name="y">
    <br>
    <label>select an operator:</label>
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <br>
    <input type="submit" name="submit" value="calculate">
    </form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
 $x=$_POST["x"];
 $y=$_POST["y"];
 $operator=$_POST["operation"];
 if($operator == '+'){
     $z=$x+$y;
 }
 elseif($operator == '-'){
    $z=$x-$y;
 }
 elseif($operator == '*')
 {
    $z=$x*$y;
 }
 elseif($operator == '/'){
    $z=$x/$y;
 }
 else{
    echo "plz enter a number";
 }
 echo $z;
}
?>