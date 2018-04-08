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
        $ret[] = $this->getLeulumoega();
        $ret[] = $this->getFasitootai();
        $ret[] = $this->getFaleatiu();
        $ret[] = $this->getSatapuala();
        return $ret;
    }

    function getNofoalii() {

        $content = [];
        $content['id'] = 101;
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

    function getLeulumoega() {

        $content = [];
        $content['id'] = 102;
        $content['parent_id'] = 100;
        $content['name'] = "Leulumoega";
        $content['content'][] = ["Fa'alupega" => ["Afio mai lo outou Tapa'au, o lau Afioga a le Tuia'ana ma ou Tafa'i (Umaga ma Pasese)",
            "Afio mai Sooa'emalelagi",
            "Afio mai alo o Tamalelagi (Tuioti ma Taualofa'i)",
            "Afio mai lau Afioga Salamasina",
            "Afio mai le Ogafanuatele",
            "Maliu mai le matua na togi (Alipia)",
            "Maliu mai le Faleiva ma lou Faletuiaana",
            "Maliu mai e na leoleo i le Faletuia'ana (Galumalemana)",
            "Maliu mai e na papae faataamilo i le Faletuiaana (Soloi ma Manuta)",
            "Maliu mai Salue ma Gatai faapea foi Polo ma Fautala",
            "Susu mai oe le Tumua"]];
        $content['content'][] = ["Malaefono" => ["Ma'auga"]];
        return $content;
    }

    function getFasitootai() {

        $content = [];
        $content['id'] = 103;
        $content['parent_id'] = 100;
        $content['name'] = "Fasito'otai";
        $content['content'][] = ["Fa'alupega" => ["Afio mai le aiga Taulagi",
            "Afio mai Vaafusuaga ma Toleafoa",
            "Afio mai Afamasaga, o le Matua of Usoalii na e fai alaga ma e matematea malo",
            "Afio mai Toleafoa ma le Falefa o ou alo (Lealaisalanoa, Laumatiamanu, Nonumalo ma Ufagalilo)",
            "Afio mai Afamasaga ma Tama a Paa (Togitogiuluau, Anamaaitu ma Lepaimasina)",
            "Afio mai le Tuiaana Faumuina e ana le Tupufia",
            "Afio mai le Matua Alii o Niulevaea ma le aiga o Sa Lauano",
            "Afio mai Tuigamala o le maopu o le Tuiaana, o oe o le au faalanumaaveave",
            "Maliu maia upu ia te oe le Falefitu, faapea foi oe o le alii o Aiga i lo oulua Usoga (Tutuila)"]];
        $content['content'][] = ["Malaefono" => ["Fogalefatu o le Tua o Ma'auga"]];
        return $content;
    }

    function getFaleatiu() {

        $content = [];
        $content['id'] = 104;
        $content['parent_id'] = 100;
        $content['name'] = "Faleatiu";
        $content['content'][] = ["Fa'alupega" => ["Afio mai lau Afioga Letelemaa'ana",
            "Afio mai le alo o Tamalelagi i lau Afioga Feiloivao",
            "Afio mai le Taufia (Muni, Mase ma Lelevaga)",
            "Afio mai le Tauiliili ma le Matua of Fonoilotoa",
            "Maliu mai lau tofa Talimatasi ma le nofo e fia o Tulafale",
            "Maliu mai le Nofoaluma ma upu ia te oe le Faleaana"]];
        $content['content'][] = ["Malaefono" => ["Malaeti'a"]];
        return $content;
    }

    function getSatapuala() {

        $content = [];
        $content['id'] = 105;
        $content['parent_id'] = 100;
        $content['name'] = "Satapuala";
        $content['content'][] = ["Fa'alupega" => ["Afio mai To'alepaialii o le matua o tofiga o le aiga Satuala",
            "Maliu mai lau fetalaiga Vaili",
            "O le la'aunafausia, o le Tootoo o Ma'auga",
            "Faapea foi le nofo a Tapuala ma le lautinalaulelei ma upu i le Faleana"]];
        $content['content'][] = ["Malaefono" => ["Faletasi o le tua o Ma'auga"]];
        return $content;
    }
}