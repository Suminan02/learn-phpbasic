<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PPHP & HTML</title>
</head>
<body>
  <?php
  $titlename = "รายรับ-รายจ่าย";
  $income=50000;
  $expense=20000;

  echo $titlename."<br>";
  echo "income =".$income."<br>";
  echo "expense =".$expense."<br>";
  echo $income-$expense."<br>";

  echo "<hr>";
  echo gettype($income) ."<br>";
  echo gettype($expense) ."<br>";
  echo gettype($titlename) ."<br>";
  settype($income,"string");
  echo gettype($income) ."<br>";
  ?>
</body>
</html>