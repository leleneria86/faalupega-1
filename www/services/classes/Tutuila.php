<?php
/**
 * Created by PhpStorm.
 * User: leleneria
 * Date: 4/2/18
 * Time: 9:09 PM
 */
namespace classes;

class Tutuila
{
    protected $motu_id = 1000;
    protected $launiusaelua_id = 1100;
    protected $sua_id = 1200;
    protected $vaifanua_id = 1300;
    protected $ituau_id = 1400;
    protected $pitonuus = [];

    function getItumalo()
    {
        $data = [
            ["id"=>$this->launiusaelua_id, "name"=>"Launiusaelua","motu_id"=>$this->motu_id, "content"=>["Afio maia lau Afioga Mauga, o le tama fa'asausau a Sua ma le Vaifanua, Fofo ma Itulagi, Itu'au ma Alataua",
                "Susu mai Sa'ousoali'i",
                "Susu mai Ma'opu (Tei ma Anoalo)",
                "Mamalu mai lau tofa Tua'olo na faleagaulu ai le motu, ma le Launiusaelua"]],
            ["id"=>$this->sua_id, "name"=>"Sua","motu_id"=>$this->motu_id, "content"=>["Afio mai Sua"]],
            ["id"=>$this->vaifanua_id, "name"=>"Vaifanua","motu_id"=>$this->motu_id, "content"=>["Afio mai Vaifanua"]],
            ["id"=>$this->ituau_id, "name"=>"Itu'au","motu_id"=>$this->motu_id, "content"=>["Afio mai Itu'au"]]
        ];
        return $data;
    }

    function getNuus() {

        $launiusaelua = $this->getLauniusaelua();
        $sua = $this->getSua();
        return array_merge($launiusaelua, $sua);
    }

    function getPitonuus() {

        return $this->pitonuus;
    }

    function getSua() {

        $ret = [];
        $ret[] = $this->getFagaitua();
        $ret[] = $this->getAmaua();
        $ret[] = $this->getLaulii();
        $ret[] = $this->getAfono();
        $ret[] = $this->getMasefau();
        $ret[] = $this->getSailele();
        return $ret;
    }

    function getFagaitua() {

        $nuu = [];
        $nuu['id'] = $this->sua_id + 1;
        $nuu['motu_id'] = $this->sua_id;
        $nuu['name'] = "Faga'itua";
        $nuu['content'][] = ["Faga'itua" => [
            "Afio mai Laiato o le na autasi i ai Sua ma le Vaifanua",
            "Susu mai le Tumua, oe le Lufilufi tauese, o lau Afioga Leiato ma ou aiga",
            "Susu mai Sa'o (Lefao ma Lauatua'a)",
            "Mamalu mai le fetalaiga i e na leleo i le maota i Utumoea'au ma Fatulegae'e (Malepeai ma Vimalefetau)",
            "Maliu mai le fofoga o Aiga i lau tofa Leota",
            "Maliu mai Utoafili, o le manu o le tuasivi e fagota i tai e lua, o le tai papa'u ma le tai sua",
            "Alala mai oe le Atiiato ma upu i le Alataua"]];
        $nuu['content'][] = ["Malaefono" => ["Malotumau", "Utumoea'au", "Fatulegae'e", "Faga'itua"]];
        return $nuu;
    }

    function getAmaua() {

        $nuu = [];
        $nuu['id'] = $this->sua_id + 2;
        $nuu['motu_id'] = $this->sua_id;
        $nuu['name'] = 'Amaua';
        $nuu['content'][] = ["Amaua" => [
            "Afio mai oulua Ma'opu (Tialavea ma Savea)",
            "Maliu mai i la'ua Matua, ma le fetalaiga ia te oe le Atisua, ma upu i le Alataua"]];
        $nuu['content'][] = ["Malaefono" => ["Laloniu", "Falemalama"]];
        return $nuu;
    }

    function getLaulii() {

        $nuu = [];
        $nuu['id'] = $this->sua_id + 3;
        $nuu['motu_id'] = $this->sua_id;
        $nuu['name'] = "Lauli'i";
        $nuu['content'][] = ["Lauli'i" => [
            "Afio mai Laalaisalanoa, o le tama a malili e fa",
            "Susu mai le Autapa'au (Paleafei)",
            "Susu mai le Ma'ava a Sua ma le Vaifanua (Leaana)",
            "Maliu mai oulua Matua (Mulitauaopele ma Fiataui'au'ualava)",
            "Maliu mai le fetalaiga i le Atisua ma upu i le Alataua"]];
        $nuu['content'][] = ["Malaefono" => ["Laloniu", "Falemalama"]];
        return $nuu;
    }

    function getAfono() {

        $nuu = [];
        $nuu['id'] = $this->sua_id + 4;
        $nuu['motu_id'] = $this->sua_id;
        $nuu['name'] = "Afono";
        $nuu['content'][] = ["Afono" => [
            "Afio mai lau Afioga Mata'utia o le na ulua'i sa'o i papa",
            "Susu mai le sa'o fetalai (Laupola)",
            "Susu mai le matua (Tela)",
            "Susu mai Tamapa'a (Tuimavave)",
            "Susu mai Faasuamaleaui, o le alo o Mata'afa",
            "Susu mai le aloalii (Tulafono)",
            "Maliu mai Ao (Sua, Matagaono, I'aulualo, Aoelua)",
            "Maliu mai le fetalaiga ia Afonotele"]];
        $nuu['content'][] = ["Malaefono" => ["Malaefono", "Avagafono"]];
        return $nuu;
    }

    function getMasefau() {

        $nuu = [];
        $nuu['id'] = $this->sua_id + 5;
        $nuu['motu_id'] = $this->sua_id;
        $nuu['name'] = "Masefau";
        $nuu['content'][] = ["Masefau" => [
            "Afio mai lau Afioga Sagapolutele",
            "Susu mai le Matua (Foutanu)",
            "Susu mai alii o le Falefitu (Faamausili, Taamai, Talaeai, Fesili, Ufanafa, Misa, Tagoa'i)",
            "Susu mai le Maiava-aitu, o le Launatausala",
            "Mamalu mai le fetalaiga i le faiga (Taloolemaagao, Maga, Salausa)"]];
        $nuu['content'][] = ["Malaefono" => ["Lalofau", "Olotele"]];
        return $nuu;
    }

    function getSailele()
    {
        $nuu = [];
        $nuu['id'] = $this->sua_id + 6;
        $nuu['motu_id'] = $this->sua_id;
        $nuu['name'] = "Sailele ma Masausi";
        $nuu['content'][] = ["Sailele ma Masausi" => [
            "Susu mai le matua (Togiola)",
            "Afio mai Lemanu",
            "Afio mai Fiaseu ma Igafo",
            "Afio mai le alii o aiga (Tuinei)",
            "Maliu mai oulua o lo'o nonofo i ala fale (Migi, Vaisau)",
            "Faapea le mamalu i aiga"]];
        $nuu['content'][] = ["Malaefono" => ["Malotumau", "Utumoea'au", "Fatulegae'e", "Faga'itua"]];
        return $nuu;
    }

    function getLauniusaelua() {

        $ret = [];
        $ret[] = $this->getAua();
        $ret[] = $this->getLeloaloa();
        $ret[] = $this->getPagoPago();
        $ret[] = $this->getFagatogo();
        $ret[] = $this->getFagaalu();
        return $ret;
    }

    function getAua() {

        $nuu = [];
        $nuu['id'] = $this->launiusaelua_id + 1;
        $nuu['motu_id'] = $this->launiusaelua_id;
        $nuu['name'] = 'Aua';
        $nuu['content'][] = ["Aua" => ["Afio mai le Sa'ousoali'i (Unutoa)",
            "Afio mai le Matua o Lifau o le Tama a Aitu ma Tagata",
            "Susu mai le faleono (Uli, Niumatalolo, Ponausuia, Saoimanulua, Tilo, Afu)",
            "Mamalu mai le fetalaiga ia Paopaoailua ma Tufaga me le launiusaelua"]];
        $nuu['content'][] = ["Malaefono" => ["Paepaeulupo'o", "Paepae alå"]];
        return $nuu;
    }

    function getLeloaloa() {

        $nuu = [];
        $nuu['id'] = $this->launiusaelua_id + 2;
        $nuu['motu_id'] = $this->launiusaelua_id;
        $nuu['name'] = 'Leloaloa';
        $nuu['content'][] = ["Leloaloa" => ["Afio mai oulua Ma'opu (Faumuina ma Uti)",
            "susu mai le ali'i o le ao (Vaivao)",
            "Maliu mai la oulua fetalaiga (Loloaso ma Tauanuu)",
            "Mamalu mai le lauti na laulelei i le Launiusaelua"]];
        $nuu['content'][] = ["Malaefono" => ["Tala o Gagamoe"]];
        return $nuu;
    }

    function getPagoPago() {

        $nuu = [];
        $nuu['id'] = $this->launiusaelua_id + 3;
        $nuu['motu_id'] = $this->launiusaelua_id;
        $nuu['name'] = 'Pago Pago';
        $nuu['content'][] = ["Pago Pago" => ["Afio mai Mauga o le Ma'oputasi,",
            "o le Tama fa'asausau o Sua ma le Vaifanua, Fofo ma Aitulagi, Itu'au ma Alataua",
            "Susu mai Tei (Fanene, Uifa'atali, Lealaifuaneva)",
            "Susu mai Anoalo (Te'o, Asuega, Tiumaletavai, Olotoa, Leota)",
            "Susu mai Matua (Taito, Pulumataala)",
            "Susu mai Nofo fanau (Ni, Vaivao)",
            "Susu mai Anoaloifale (Lea'oa, Fa'afitinalo)",
            "Mamalu mai lau tofa Tua'olo na Faleagafulu ai le motu",
            "ma le Falefa (Fuga, Mageo, Poiali'i, Logo",
            "Maliu mai oe le Launiusaelua"]];
        $nuu['content'][] = ["Malaefono" => ["Gagamoe"]];
        return $nuu;
    }

    function getFagatogo() {

        $nuu = [];
        $nuu['id'] = $this->launiusaelua_id + 4;
        $nuu['motu_id'] = $this->launiusaelua_id;
        $nuu['name'] = 'Fagatogo';
        $nuu['content'][] = ["Fagatogo" => ["Afio mai le Sa'ousoalii (Lutu)",
            "Susu mai le Toealii (Ma'ilo)",
            "Susu mai oulua Tapunuu (Faagata ma Tiumalu)",
            "Afio mai le Aloalii (Afoafouvale)",
            "Maliu mai le fetalaiga ia Taesalialii ma Taamuvaigafa",
            "Mamalu mai upu i le Launiusaelua ia te outlua Tinaeatule ma Faasamisamia"]];
        $nuu['content'][] = ["Malaefono" => ["Malaeoletalu"]];
        return $nuu;
    }

    function getFagaalu() {

        $nuu = [];
        $nuu['id'] = $this->launiusaelua_id + 5;
        $nuu['motu_id'] = $this->launiusaelua_id;
        $nuu['name'] = 'Fagaalu';
        $nuu['content'][] = ["Fagaalu" => ["Afio mai le Afioga i Ma'opu (Fano, Amituana'i)",
            "Susu mai le Nofo Fanau (Naisoa)",
            "Maliu mai le Launiusaelua (Usoagalelei ma Faatiliga)",
            "Ma le Lauti na Laulelei"]];
        $nuu['content'][] = ["Malaefono" => ["Vaovai"]];
        return $nuu;
    }
}
