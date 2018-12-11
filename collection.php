<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tanner
 * Date: 12/10/2018
 * Time: 9:19 PM
 */
if(isset($_GET["link"])){
    $url = parse_url($_GET["link"]);
    file_put_contents("links",$url['path'] . "\n", FILE_APPEND | LOCK_EX);
}else{
    include 'links';
}

