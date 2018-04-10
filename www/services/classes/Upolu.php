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
    protected $aana_id = 2100;
    protected $atua_id = 2200;
    protected $tuamasaga_id = 2300;

    function getItumalo()
    {
        $data = [
            ["id"=>$this->aana_id, "name"=>"A'ana","parent_id"=>2, "content"=>["Fa'alupega o A'ana"]],
            ["id"=>$this->atua_id, "name"=>"Atua","parent_id"=>2, "content"=>["Fa'alupega o Atua"]],
            ["id"=>$this->tuamasaga_id, "name"=>"Tuamasaga","parent_id"=>2, "content"=>["Fa'alupega o Tuamasaga"]]
        ];
        return $data;
    }

    function getAana() {

        $ret = [];
        $ret[] = $this->getFasitoouta();
        $ret[] = $this->getNofoalii();
        $ret[] = $this->getLeulumoega();
        $ret[] = $this->getFasitootai();
        $ret[] = $this->getFaleatiu();
        $ret[] = $this->getSatapuala();
        $ret[] = $this->getSatuimalufilufi();
        $ret[] = $this->getSamatau();
        $ret[] = $this->getFalelatai();
        return $ret;
    }

    function getNuus() {

        $aana = $this->getAana();
        return array_merge($aana);
    }

    function getFasitoouta() {

        $content = [];
        $content['id'] = $this->aana_id + 9;
        $content['parent_id'] = $this->aana_id;
        $content['name'] = "Fasito'o - uta";
        $content['content'][] = ["Fasito'o - uta" => ["Afio mai le aiga Satuala, o le aiga faalagilagi ia te oulua suafa (Aiono ma Leaupepe)",
            "Susu mai e na tautua i Suafa (Tuala, Fina'i, Suamatai'a, Tuisaninoga, Taimaaiono ma Talamatavao)",
            "Susu mai Su'a o le maopu o Nafanua",
            "Afio mai Toleafoa o le Tapaau faasisina ma le Taauso (Misa, Tuifaiga, Aiolupotea, Nonumalo ma Lolomatauama)",
            "Afio mai ma susu mai Pule ma Mulitalo o Seetalaluma",
            "Maliu mai le Falefitu ma le nofo a Ituaiga",
            "Maliu mai Ape na e moe manatunatu",
            "Maliu mai lau tofa le matua Tauauve'a",
            "Maliu mai Tui ma Sasavaimuli ma lo outou Tapaau o Leatamuli"]];
        $content['content'][] = ["Malaefono" => ["Malaetia - o le Tua o Ma'auga",
                                                "Tapulaaia - E afio ai Leaupepe ma le paia o Satuala"]];
        return $content;
    }

    function getNofoalii() {

        $content = [];
        $content['id'] = $this->aana_id + 1;
        $content['parent_id'] = $this->aana_id;
        $content['name'] = "Nofoali'i";
        $content['content'][] = ["Nofoali'i" => ["Afio mai Satuala, o le aiga fa'alagilagi na tausi e Leulumoega",
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
        $content['id'] = $this->aana_id + 2;
        $content['parent_id'] = $this->aana_id;
        $content['name'] = "Leulumoega";
        $content['content'][] = ["Leulumoega" => ["Afio mai lo outou Tapa'au, o lau Afioga a le Tuia'ana ma ou Tafa'i (Umaga ma Pasese)",
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
        $content['id'] = $this->aana_id + 3;
        $content['parent_id'] = $this->aana_id;
        $content['name'] = "Fasito'o - tai";
        $content['content'][] = ["Fasito'o - tai" => ["Afio mai le aiga Taulagi",
            "Afio mai Vaafusuaga ma Toleafoa",
            "Afio mai Afamasaga, o le Matua of Usoalii na e fai alaga ma e matematea malo",
            "Afio mai Toleafoa ma le Falefa o ou alo (Lealaisalanoa, Laumatiamanu, Nonumalo ma Ufagalilo)",
            "Afio mai Afamasaga ma Tama a Paa (Togitogiuluau, Anamaaitu ma Lepaimasina)",
            "Afio mai le Tuiaana Faumuina e ana le Tupufia",
            "Afio mai le Matua Alii o Niulevaea ma le aiga o Sa Lauano",
            "Afio mai Tuigamala o le maopu o le Tuiaana, o oe o le au faalanumaaveave",
            "Maliu maia upu ia te oe le Falefitu, faapea foi oe o le alii o Aiga i lo oulua Usoga (Tutuila)"]];
        $content['content'][] = ["Malaefono" => ["Fogalefatu - O le Tua o Ma'auga"]];
        return $content;
    }

    function getFaleatiu() {

        $content = [];
        $content['id'] = $this->aana_id + 4;
        $content['parent_id'] = $this->aana_id;
        $content['name'] = "Faleatiu";
        $content['content'][] = ["Faleatiu" => ["Afio mai lau Afioga Letelemaa'ana",
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
        $content['id'] = $this->aana_id + 5;
        $content['parent_id'] = $this->aana_id;
        $content['name'] = "Satapuala";
        $content['content'][] = ["Satapuala" => ["Afio mai To'alepaialii o le matua o tofiga o le aiga Satuala",
            "Maliu mai lau fetalaiga Vaili",
            "O le la'aunafausia, o le Tootoo o Ma'auga",
            "Faapea foi le nofo a Tapuala ma le lautinalaulelei ma upu i le Faleana"]];
        $content['content'][] = ["Malaefono" => ["Faletasi o le tua o Ma'auga"]];
        return $content;
    }

    function getSatuimalufilufi() {

        $content = [];
        $content['id'] = $this->aana_id + 6;
        $content['parent_id'] = $this->aana_id;
        $content['name'] = "Satuimalufilufi";
        $content['content'][] = ["Satuimalufilufi" => ["Afio mai Saipaia o le Aloalii",
            "Afio mai Sauimalae",
            "Afio mai le Matua taulagi o Taito",
            "Afio mai lou Tapaau o Lilomaiava",
            "Afio mai le tamaitai o Letele",
            "Susu mai lau susuga a le Niutapuai",
            "Afio mai Tiumalu of le matua Alii",
            "Afio mai lau Afioga Tauiliili",
            "Maliu maia le matua o Pei ma le falefa (Talevu, Taloto, Laifaga ma Tuala)",
            "Maliu mai Satuimalufilufi ma le nofo a ituaiga",
            "Maliu mai le Falelua ma le aiga Pitolua",
            "(Falelua - Malaeulu ma Fuga)",
            "(Pitolua - Malagama)",
            "Maliu mai Vaa na Ituiniuese",
            "Maliu mai le Gataiala ma lau fetalaiga Tuagalu"]];
        $content['content'][] = ["Malaefono" => ["Lepapa ma Vaiala"]];
        return $content;
    }

    function getSamatau() {

        $content = [];
        $content['id'] = $this->aana_id + 7;
        $content['parent_id'] = $this->aana_id;
        $content['name'] = "Samatau";
        $content['content'][] = ["Samatau" => ["Afio mai le Falefa o Usoalii",
            "Afio mai le Gafa",
            "Afio mai Fiame ma le tamaitai o Taetele",
            "Afio mai alo o Tamalelagi",
            "Maliu mai lau tofa Puni, o oe o le Avaganofoa",
            "Maliu mai oulua Tala o le fale (Puni ma Mano'o)",
            "Maliu maia le Saofaiga ia te oe Leulumoega"]];
        $content['content'][] = ["Malaefono" => ["Niuapai"]];
        return $content;
    }

    function getFalelatai() {

        $content = [];
        $content['id'] = $this->aana_id + 8;
        $content['parent_id'] = $this->aana_id;
        $content['name'] = "Falelatai";
        $content['content'][] = ["Falelatai" => ["Afio mai Tuimalealiifano o le tama a aiga",
            "Afio mai le Falefitu, o le aiga Tauaana o le aiga o le Tuimalealiifano",
            "Afio mai lau Afioga Faasavalu ma le aiga o Sa Faasavalu (O Salu ma Auvaaipeau)",
            "Afio mai Taiivao na falefia i ai aiga (Aifilofilo)",
            "Susu mai Aumaga o Asi ma Leavaiseeta oe na Fmaina le agatonu o aiga ma la tatou tama",
            "Maliu mai le nofo a ituaiga i galu e fa ia Falelatai",
            "Maliu mai Salogo, o le Tula o Faasavalu",
            "Maliu mai Vaatuitui, o le tagata o le vavau",
            "Maliu mai vae o le nofoa fia, ma upu ia te oe Falelatai"]];
        $content['content'][] = ["Malaefono" => ["Fata -  O le tua o Ma'auga"]];
        return $content;
    }
}