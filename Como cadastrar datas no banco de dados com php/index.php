<?php

$data_br = '20/12/1989';
$stamp = strtotime(str_replace('/', '-', $data_br));
$data_en = date('Y-m-d', $stamp); //$data_en estará no formato ano-mes-dia para ser salvo no banco
echo $data_en;

$data_en = '1989-12-20';
$stamp = strtotime(str_replace('-', '/', $data_en));
$data_br = date('d/m/Y', $stamp); //$data_br estará no formato dia/mes/ano para ser exibido na tela
echo $data_br;

?>