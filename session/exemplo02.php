<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 22/07/2018
 * Time: 10:05
 */
require_once "config.php";
session_unset();
echo $_SESSION['nome'];
session_destroy();

?>