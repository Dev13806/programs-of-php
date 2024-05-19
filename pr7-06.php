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
}
class C extends B
{
    function __construct()
    {
        echo "Class C inherited class B and Class B inherited class A<br>A<br>↑<br>B<br>↑<br>C<br>";
    }
}
$obj = new C();
$obj->funcA();
?>