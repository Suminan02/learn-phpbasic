<?php
  $a=500;
  $b=500;
  $c=400;
  $d= "500";
  $checkAandB=$a>$b;

  echo"a=".$a.",b =".$b.",c =".$c.",d =".$d."string<br>";
  
  echo"var_dump(==)<br>";
  var_dump( $a== $b ); //check number is same  or not
  echo"<br><hr>";

  echo"var_dump(!=)<br>";
  var_dump( $a!= $c );//number is not equal or not
  echo"<br><hr>";
  echo"var_dump(===)<br>";
  var_dump( $a === $d ); //check data is same type and number or not
  echo"<br><hr>";

  echo"var_dump(!==)<br>";
  var_dump( $a!== $d ); //check data is not same type and number or not 
  echo"<br><hr>";

  echo"var_dump(>)<br>";
  var_dump( $a> $b );
  var_dump($checkAandB);
  echo"<br><hr>";

  echo"var_dump(<)<br>";
  var_dump( $a< $b );
  echo"<br><hr>";

  echo"var_dump(<>)<br>";
  var_dump( $a<> $b );
  echo"<br><hr>";

  echo"var_dump(>=)<br>";
  var_dump( $a>= $b );
  echo"<br><hr>";

  echo"var_dump($a<=>$b)<br>";
  var_dump( $a<=> $b );
  echo"<br><hr>";
  echo"var_dump($a<=> $c)<br>";
  var_dump( $a<=> $c );
  echo"<br><hr>";
  echo"var_dump($c<=> $a)<br>";
  var_dump( $c<=> $a );
  echo"<br><hr>";
?>