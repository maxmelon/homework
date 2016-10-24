<html>
<body>

<form method="get">
<label for="number">Номер:</label><input type="text" id="number" name="number">
<input type="submit">
</form>

<?php

error_reporting(E_ALL);

$x = rand(1,9);
$number = $_GET["number"];

if (!empty($number))
{
  if ($number > $x)
  {
    echo "Много";
  }
  else {
    if ($number < $x)
    {
      echo "Мало";
    }
    else {
      echo "Угадали!";
    }
  }
}
?>

</body>
</html>
