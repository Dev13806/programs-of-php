<?php
class MyClass
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function __clone()
    {
        $this->data = "Cloned " . $this->data;
    }
}

$obj1 = new MyClass("Original Data");
$obj2 = clone $obj1;
echo "Original Object Data: " . $obj1->data . "<br>";
echo "Cloned Object Data: " . $obj2->data;
?>