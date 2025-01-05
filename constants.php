<?php
 // $score=100;
  define("SCORE",100); //define will fix score to can not change their value
  // !! Var you want to fix value please create name in Capital letter for easy to understand with another programer
  echo "SCORE=".SCORE."<br>";

  define("PI",3.14); //example PI I want to fix value then I use define and create name in capital letter
  $radius=6;
  $area=PI*$radius*$radius;
  echo"cicle area=".$area;
?>