<?php

require_once('../../../classes/Upolu.php');
require_once('../../../classes/Tutuila.php');
require_once('../../../classes/Savaii.php');

use classes\Upolu;
use classes\Tutuila;
use classes\Savaii;

$ret = [];
$ret['itumalos'] = getItumalos();
$ret['nuus'] = getNuus();
$ret['pitonuus'] = getPitonuus();
$ret['motus'] = getMotu();

echo json_encode($ret);

function getMotu() {

    $motu = [["id"=>0, "name"=>"All", "content"=>"","motu_id"=>null],
                ["id"=>1000, "name"=>"Tutuila","content"=>""],
                ["id"=>2000, "name"=>"Upolu","content"=>["Tumua ma Pule, Itu'au ma Alatau, Aiga i le Tai ma le Va'a o Fonoti"]],
                ["id"=>3000,"name"=>"Savai'i","content"=>["Pule e ono"]]];
    return $motu;
}

function getItumalos() {

    $itumalos = [["id"=>0, "name"=>"All", "content"=>"","motu_id"=>null]];
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

function getPitonuus() {

    $upolu = new Upolu();
    $tutuila = new Tutuila();
    $savaii = new Savaii();
    $nuu_tutuila = $tutuila->getPitonuus();
    $nuu_upolu = $upolu->getPitonuus();
    $nuu_savaii = $savaii->getPitonuus();
    return array_merge($nuu_tutuila, $nuu_upolu, $nuu_savaii);
}

