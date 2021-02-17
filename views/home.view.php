<?php
ob_start() 
?>

<br>Bienvenue sur RetroGames !<br><br>

<?php
$content = ob_get_clean();
$title = "RetroGames";
require "template.php";
?>