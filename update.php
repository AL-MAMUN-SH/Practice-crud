<?php
$connection =mysqli_connect('localhost','root','','emnicrud');
if (!$connection){
    die("ERROR");
}
mysqli_query($connection,'update cats set name ="XYZ" where id =7');
echo "SUCCESSFULLY UPDATED";