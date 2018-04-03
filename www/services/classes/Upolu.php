<?php
/**
 * Created by PhpStorm.
 * User: leleneria
 * Date: 4/2/18
 * Time: 9:09 PM
 */
namespace classes;

class Upolu
{
    function getItumalo()
    {
        $data = [
            ["id"=>100, "name"=>"A'ana","parent_id"=>2, "content"=>["Fa'alupega o A'ana"]]
        ];
        return $data;
    }

    function getNuus() {

        $ret = [];
        $ret[] = $this->getNofoalii();
        return $ret;
    }

    function getNofoalii() {

        $content = [];
        $content['id'] = 1;
        $content['parent_id'] = 100;
        $content['name'] = "Nofoali'i";
        $content['content'][] = ["Fa'alupega" => ["Afio mai Satuala, o le aiga fa'alagilagi na tausi e Leulumoega",
            "Susu mai Tanuvase, o le la'au na fausia na itulua a i A'ana",
            "Afio mai Taimalieutu o le fofoga of Satuala me le falefa of Ailaoa (Maluifaatoaga, Taualelei, Peoali'i, Matagitau)",
            "Afio mai Muagututi'a o le tama o le aiga o Satuala",
            "Afio mai lau afioga a le alo ali'i (Fepulea'i)",
            "Maliu mai lau fetalaiga Faiumu Mata'ata'ata",
            "Maliu mai lau Tofa Taumateine, fa'apea le nofo a ituaiga ia te oe le Falea'ana"]];
        $content['content'][] = ["Malaefono" => ["Sagameauta"]];
        return $content;
    }
}