<?php
if ( !session_status() == PHP_SESSION_ACTIVE )
{
   session_start();
}
require_once __DIR__."/../../config/config.php";
include_once __DIR__."/../../src/controllers/functions.php";

if(Logged($_SESSION) == true){
    include_once __DIR__.'/../../templates/navbar/navbarlogged.php';
}else {
    include_once __DIR__.'/../../templates/navbar/navbar.php';
}