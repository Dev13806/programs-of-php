<?php
class ParentClass
{
    public function methodA()
    {
        echo "This is the method from ParentClass<br>";
    }
}

class ChildClass extends ParentClass
{
    public function methodA()
    {
        echo "This is the method from ChildClass";
    }
}

$parentObj = new ParentClass();
$childObj = new ChildClass();
$parentObj->methodA();
$childObj->methodA();
?>