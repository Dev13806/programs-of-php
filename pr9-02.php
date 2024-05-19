<?php
$name = "ABC";
setcookie("username", $name, 0, "/");

if (isset($_COOKIE["username"])) {
    echo "Welcome back, " . $_COOKIE["username"] . "!";
} else {
    echo "Cookie not set!";
}
?>