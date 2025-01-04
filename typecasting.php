<?php
  $price=100.03;
  $delivery=50.22;

  $total=$price+$delivery;

  echo "ก่อนแปลง =".$total."<br>";

  $total=(int)$total;
  echo "หลังแปลง".$total."<br>";

  echo "<hr>";
  $sum="5000";
  echo "before".$sum."<br>";
  echo "ก่อนแปลง =".gettype($sum)."<br>";
  $sum=(int)$sum;
  echo "หลังแปลง =".gettype($sum)."<br>";
  echo "หลังแปลง".$sum."<br>";

?>