<?php
  $price=100.03;
  $delivery=50.22;

  $total=$price+$delivery;

  echo "ก่อนแปลง =".$total."<br>";

  $total=(int)$total;
  echo "หลังแปลง".$total."<br>";
?>