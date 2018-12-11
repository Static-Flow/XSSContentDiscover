<?php
//simple collection page take the get param write it to a file.
//PLEASE DO NOT HOST THIS PUBLICLY IN ITS CURRENT FORM
if(isset($_GET["link"])){
    $url = parse_url($_GET["link"]);
    file_put_contents("links",$url['path'] . "\n", FILE_APPEND | LOCK_EX);
}else{
    include 'links';
}

