<?php
echo "<pre>";
 $connection = mysqli_connect('localhost','root','','emnicrud');
 if (!$connection){
     die('SOMETHING WRONG');
 }

 $catview = mysqli_query($connection,'select * from cats');
     while($cat=mysqli_fetch_assoc($catview))
     {
         print_r($cat['id']);
         echo " - ";
         print_r($cat["name"]);
         echo "<br>";
     }