<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 22/07/2018
 * Time: 14:50
 */
function soma(float ...$valores):float{
    return array_sum($valores);
}
echo soma(2,2);
echo "<br/>";
echo soma(25,33);
echo "<br/>";
echo soma(1.5,3.2);
echo "<br/>";

?>