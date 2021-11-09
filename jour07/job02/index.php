<?php

$cookie_name = "nbvisites";
$cookie_value = 0;
var_dump ($_COOKIE);
if (!isset($_COOKIE[$cookie_name]))
{
    setcookie($cookie_name, $cookie_value, time() + 3600);
}
else
{
    setcookie($cookie_name, $_COOKIE[$cookie_name]+1, time() + 3600);
}
echo $_COOKIE[$cookie_name];

if(isset($_POST["reset"]))
{
    setcookie($cookie_name, $_COOKIE[$cookie_name] = 0, time() + 3600);
}

?>

<form action="" method="post">
    <input type="submit" name="reset" value="reset">
</form>