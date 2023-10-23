
<?php

$vista=$_POST['vista'];

   if ($vista!="") {
    Header("location:../index.php?vista=".$vista);
   }
?>