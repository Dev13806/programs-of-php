<?php
interface A
{
    public function methodA();
}

interface B
{
    public function methodB();
}

class MyClass implements A, B
{
    public function methodA()
    {
        echo "This is a method of interface A <br>";
    }
    public function methodB()
    {
        echo "This is a method of interface B <br>";
    }
}

$obj = new MyClass();
$obj->methodA();
$obj->methodB();
?>