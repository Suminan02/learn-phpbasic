<?php
  
//   rowtest(5);
//   function rowtest($row) {
//     for( $i= 0; $i<=$row; $i++ ) {
//       for( $j= 0; $j<=$i; $j++ ){
//         echo "*";
//       }
//       echo"<br>";
//   }
// }

$dokjan="*";
$j=10;
for($i=0;$i<$j;$i++){
  echo $dokjan."<br>";
  $dokjan = $dokjan."*";
}
?>