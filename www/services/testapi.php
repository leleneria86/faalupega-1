<?php

require_once('classes/Upolu.php');
require_once('classes/Tutuila.php');
require_once ('classes/Savaii.php');

use classes\Upolu;
use classes\Tutuila;
use classes\Savaii;

$ret = [];
$ret['children'] = getItumalos();
$ret['grandchildren'] = getNuus();

echo json_encode($ret);

function getItumalos() {

    $itumalos = [["id"=>0, "name"=>"All", "content"=>"","parent_id"=>null]];
    $upolu = new Upolu();
    $itumalo_upolu = $upolu->getItumalo();
    $tutuila = new Tutuila();
    $itumalo_tutuila = $tutuila->getItumalo();
    $savaii = new Savaii();
    $itumalo_savaii = $savaii->getItumalo();
    return  array_merge($itumalos, $itumalo_upolu, $itumalo_tutuila, $itumalo_savaii);
}

function getNuus() {

    $upolu = new Upolu();
    $tutuila = new Tutuila();
    $savaii = new Savaii();
    $nuu_tutuila = $tutuila->getNuus();
    $nuu_upolu = $upolu->getNuus();
    $nuu_savaii = $savaii->getNuus();
    return array_merge($nuu_tutuila, $nuu_upolu, $nuu_savaii);
}

