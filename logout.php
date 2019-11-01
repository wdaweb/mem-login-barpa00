<?php
 setcookie("login","",time()-3600);
 setcookie("id","",time()+3600);

 header("location:member_center.php");
?>