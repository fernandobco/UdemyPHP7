<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 21/07/2018
 * Time: 19:23
 */
$json='[{"nome":"João","idade":20},{"nome":"Glaucio","idade":25}]';
$data=json_decode($json,true);
var_dump($data);