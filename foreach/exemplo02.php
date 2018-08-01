
<form>
    <input type="text" name="nome"/>
    <input type="date" name="nascimento"/>
    <input type="submit" value="OK"/>
</form>


<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 21/07/2018
 * Time: 18:08
 */
if(isset($_GET)){
    foreach ($_GET as $key => $value){
        echo "Nome do campo: ".$key."<br/>";
        echo "Valor do campo: ".$value;
        echo "<hr/>";
    }
}


?>