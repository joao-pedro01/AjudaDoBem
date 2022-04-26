<?php
session_start();

include_once "/xampp/htdocs/AjudaDoBem/config/config.php";
include_once "/xampp/htdocs/AjudaDoBem/src/controllers/functions.php";

if(Logged($_SESSION) == true){
    include_once dirname(__FILE__,3).'/templates/navbar/navbarlogged.php';
}else {
    include_once dirname(__FILE__,3).'/templates/navbar/navbar.php';
}
?>