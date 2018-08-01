<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 22/07/2018
 * Time: 15:01
 */
$hierarquia=array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            //Inicio: Diretor Comercial
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados'=>array(
                    //Inicio Gerente de Vendas
                    array(
                        'nome_cargo'=>'Gerente de Vendas'
                    )
                    //Témino: Gerente de Vendas
                )
            ),
            // Término: Diretor Comercial
            //Inicio: Diretor Financeiro
            array(
                'nome_cargo'=>'Diretor Financeiro',
                'subordinados'=>array(
                    //Início: Gerente de Contas a pagar
                    array(
                        'nome_cargo'=>'Gerente de Contas à pargar',
                        'subordinados'=>array(
                            //Início: supervisor de pagamentos
                            array(
                                'nome_cargo'=>'Supervisor de Pagamentos'
                            )
                            //Término: Supervisor de Pagamentos
                        )
                    ),
                    //Término: Gerente de Contas a pagar
                    //Início: Gerente de Compras
                    array(
                        'nome_cargo'=>'Gerente de Compras',
                        'subordinados'=>array(
                            //Início: Supervisor Suprimentos
                            array(
                                'nome_cargo'=>'Supervisor de Suprimentos'
                            )
                            //Término: Supervisor de Suprimentos
                        )
                    )
                    //Término: Gerente de Compras
                )
            )
        )
    )
);

function exibe($cargos){
    $html='<ul>';
    foreach ($cargos as $cargo){
        $html.='<li>';
        $html.=$cargo['nome_cargo'];
        if (isset($cargo['subordinados'])&& count($cargo['subordinados'])>0){
            $html.=exibe($cargo['subordinados']);
        }
        $html.='</li>';
    }
    $html.='</ul>';
    return $html;
}
echo exibe($hierarquia);
?>