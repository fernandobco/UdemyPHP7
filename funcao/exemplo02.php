<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 22/07/2018
 * Time: 13:34
 */
function salario(){
    return 946.00;
}
echo "José recebeu 3 salários: R$ ".(number_format(salario()*3,2,",","."));

?>