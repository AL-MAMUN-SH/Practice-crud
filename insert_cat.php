<?php
$connection = mysqli_connect('localhost','root','','emnicrud');
if (!$connection){
    die('SOmething Wrong');
}
$data  = 'insert into cats (name,age) values("MOTU",20)';

mysqli_query($connection,$data);
echo "SUCCESSFULLY INSERTED";