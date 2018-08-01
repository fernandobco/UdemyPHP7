<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 22/07/2018
 * Time: 18:38
 */
function test($callback){
    //Processo lento
    $callback();
}
test(function(){
   echo "Terminou";
});

?>