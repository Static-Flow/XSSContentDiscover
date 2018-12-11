<?php
//This is how Myspace does session management too
setcookie("admin", NULL, 0, "/");
header('Location: /home.php');
die();