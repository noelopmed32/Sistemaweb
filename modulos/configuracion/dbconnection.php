<?php
$con=mysqli_connect("localhost", "root", "kondor25", "bd_logins");
if(mysqli_connect_errno())
{
echo "Connection Fail".mysqli_connect_error();
}
?>