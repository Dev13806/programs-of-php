<?php
class MyClass
{
    public $name;
    public function __construct($nm)
    {
        echo "Constructor called!<br>";
        $this->name = $nm;
    }
    public function display()
    {
        echo "Your name is $this->name<br>";
    }
    public function __destruct()
    {
        echo "Destructor called!<br>";
    }
}
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $obj1 = new MyClass($name);
    $obj1->display();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 7-01</title>
</head>

<body>
    <form method="post">
        <label for="name">Name :</label>
        <input type="text" name="name" placeholder="Enter your name" required><br>
        <input type="submit">
    </form>
</body>

</html>