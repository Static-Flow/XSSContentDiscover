<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tanner
 * Date: 12/10/2018
 * Time: 8:44 PM
 */
setcookie("admin", NULL, 0, "/");
header('Location: /home.php');
die();