<?php
  $total1=null;
  $total2= "";
  $total3= 0;
  $total4= "stringTest";

  echo "isset<br><hr>";
  echo "total1 =".$total1."<br>";
  echo "total2 = ".$total2."<br>";
  echo "total3 =".$total3."<br>";
  echo "total4 =".$total4."<br>";
  echo "<hr>";
  echo "total 1 =".isset($total1)."<br>";
  echo "total 2 =".isset($total2)."<br>";
  echo "total 3 =".isset($total3)."<br>";
  echo "total 4 =".isset($total4)."<br>";
  echo "<hr>";

  echo"empty <br><hr>";
  echo "total1 =".$total1."<br>";
  echo "total2 = ".$total2."<br>";
  echo "total3 =".$total3."<br>";
  echo "total4 =".$total4."<br>";
  echo "<hr>";
  echo "total 1 =".empty($total1)."<br>";
  echo "total 2 =".empty($total2)."<br>";
  echo "total 3 =".empty($total3)."<br>";
  echo "total 4 =".empty($total4)."<br><hr>";

  echo "is_null<br><hr>";
  echo "total1 =".$total1."<br>";
  echo "total2 = ".$total2."<br>";
  echo "total3 =".$total3."<br>";
  echo "total4 =".$total4."<br>";
  echo "<hr>";
  echo "total 1 =".is_null($total1)."<br>";
  echo "total 2 =".is_null($total2)."<br>";
  echo "totla 3 =".is_null($total3)."<br>";
  echo "total 4".is_null($total4)."<br><hr>";
  echo "vardump<br><hr>";
  echo "= total 1 ".var_dump($total1)."<br>";
  echo "= total 2 ".var_dump($total2)."<br>";
  echo "= total 3 ".var_dump($total3)."<br>";
  echo "= total 4 ".var_dump($total4)."<br><hr>";
  echo "unset<br><hr>";
  unset($total4);
  echo "total1 =".$total1."<br>";
  echo "total2 = ".$total2."<br>";
  echo "total3 =".$total3."<br>";
  echo "total4 =".$total4."<br>";
  echo "<hr>";
  echo "total 1 =".isset($total1)."<br>";
  echo "total 2 =".isset($total2)."<br>";
  echo "total 3 =".isset($total3)."<br>";
  echo "total 4 =".isset($total4)."<br>";
  echo "<hr>";



?>