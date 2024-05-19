<?php
class MyClass
{
    public function methodA()
    {
        $numArgs = func_num_args();
        switch ($numArgs) {
            case 1:
                $this->methodAWithOneArg(func_get_arg(0));
                break;
            case 2:
                $this->methodAWithTwoArgs(func_get_arg(0), func_get_arg(1));
                break;
            default:
                echo "Invalid number of arguments<br>";
                break;
        }
    }

    private function methodAWithOneArg($arg1)
    {
        echo "Method with one argument: $arg1<br>";
    }

    private function methodAWithTwoArgs($arg1, $arg2)
    {
        echo "Method with two arguments: $arg1, $arg2<br>";
    }
}

$obj = new MyClass("");
$obj->methodA('Argument 1');
$obj->methodA('Argument 1', 'Argument 2');
?>