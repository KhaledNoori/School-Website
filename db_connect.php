<?php
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_SCHEMA","mydatabase");



$GLOBALS['DB'] = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_SCHEMA);

if(!$GLOBALS['DB']){

    echo " You cant not connect to the Database";
}else{

    echo " You Connected";
}
?>