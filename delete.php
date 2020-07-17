<?php
$connection =mysqli_connect('localhost','root','','emnicrud');
if (!$connection){
    die("ERROR");
}
mysqli_query($connection,'delete from cats where id = 2');
echo "SUCCESSFULLY";
