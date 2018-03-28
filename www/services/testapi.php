<?php

$ret['data'] = [];

$ret['grandchildren'][] = getAua();
$ret['grandchildren'][] = getLeloaloa();

echo json_encode($ret);

function getAua() {

    $aua = [];
    $aua['id'] = 1;
    $aua['parent_id'] = 1;
    $aua['name'] = 'Aua';
    $aua['content'][] = ["Fa'alupega" => ["Afio mai le Sa'ousoali'i o Unutoa, Le tama aitu ma tagata",
        "Le Matua or Lifau ma Liufau",
        "Susu mai Ali'i of le Faleono"]];
    $aua['content'][] = ["Malaefono" => ["Paepaeulupo'o"]];
    return $aua;
}

function getLeloaloa() {

    $aua = [];
    $aua['id'] = 2;
    $aua['parent_id'] = 1;
    $aua['name'] = 'Leloaloa';
    $aua['content'][] = ["Fa'alupega" => ["Afio mai Ma'opu(Faumuina ma Uti)",
                                        "Afio mai le ali'i o le Ao(Vaivao)"]];
    $aua['content'][] = ["Malaefono" => ["Tala o Gagamoe"]];
    return $aua;
}