<?php
class A
{
    public function funcA()
    {
        echo "I'm function of class A";
    }
}
class B extends A
{
    function __construct()
    {
        echo "Class B inherited class A <br>A<br>↑<br>B<br>";
    }
}
$obj = new B();
$obj->funcA();
?>