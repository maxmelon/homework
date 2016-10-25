<?php
session_start();
ini_set("display_errors", "On"); error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
<body>

<?php
if(!isset($_SESSION["HiddenNumber"])) {
    $_SESSION["HiddenNumber"] = rand(1,9);
}
?>

<form method="get">
<label for="number">Число:</label><input type="text" id="SuggestedNumber" name="SuggestedNumber">
<input type="submit" value="Проверить">
<a href="new_session.php"><button type="button">Загадай другое число</button></a>
</form>

<?php
if (!empty($_GET["SuggestedNumber"]))
{
  if ($_GET["SuggestedNumber"] > $_SESSION["HiddenNumber"])
  {
    echo "Много";
  }
  else {
    if ($_GET["SuggestedNumber"] < $_SESSION["HiddenNumber"])
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
