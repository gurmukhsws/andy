<?php
  $id=1;
  $ttt=3;
$yyy=mysqli_query($ttt,"DELETE FROM todo where id=$id");
echo $yyy;
?>
