<?php
session_start();
session_destroy();
header("location: game_session.php");
?>
