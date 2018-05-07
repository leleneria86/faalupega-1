<?php
/**
 * Created by PhpStorm.
 * User: leleneria
 * Date: 4/2/18
 * Time: 9:09 PM
 */
namespace classes;

class Savaii
{
    protected $parent_id = 3000;
    protected $faasaleleaga_id = 3100;
    protected $salega_id = 3200;
    protected $asau_id = 3300;

    function getItumalo()
    {
        $data = [
            ["id"=>$this->faasaleleaga_id, "name"=>"Fa'asalele'aga","parent_id"=>$this->parent_id, "content"=>["Fa'alupega o Fa'asalele"]],
            ["id"=>$this->salega_id, "name"=>"Salega","parent_id"=>$this->parent_id, "content"=>["Fa'alupega o Salega"]],
            ["id"=>$this->asau_id, "name"=>"Asau","parent_id"=>$this->parent_id, "content"=>["Fa'alupega o Asau"]]
        ];
        return $data;
    }

    function getNuus() {

        $faasaleleaga = $this->getFaasaleleaga();
        return array_merge($faasaleleaga);
    }

    function getFaasaleleaga() {

        $ret = [];
        $ret[] = $this->getTafua();
        $ret[] = $this->getSalelologa();
        $ret[] = $this->getSalelavalu();
        $ret[] = $this->getIva();
        $ret[] = $this->getSapapalii();
        $ret[] = $this->getSafotulafai();
        $ret[] = $this->getTapueleele();
        $ret[] = $this->getFaga();
        $ret[] = $this->getAmoaisasae();
        $ret[] = $this->getAmoaisisifo();
        return $ret;
    }

    /*  Eveeve ma Vaimauga
        Fuifatu ma Fusi
        Fatausi
        Fogapoa
        Tuasivi */

    function getTafua() {

        $content = [];
        $content['id'] = $this->faasaleleaga_id + 1;
        $content['parent_id'] = $this->faasaleleaga_id;
        $content['name'] = "Tafua";
        $content['content'][] = ["Tafua" => ["Afio mai Taufaasisina ma Alalamatuatala",
            "Afio mai Matautia ma Tofa",
            "Susu mai Galu ma le Autapaau (O Sālū ma Togafau)",
            "Susu mai Nonu ma Salafaioti",
            "Susu mai Sa'u, Ili ma Sa'ea ma Taito",
            "Maliu mai Ulu ma Lemaota, faapea oe le To'iloto"]];
        $content['content'][] = ["Malaefono" => ["Leonē"]];
        return $content;
    }

    function getSalelologa() {

        $content = [];
        $content['id'] = $this->faasaleleaga_id + 2;
        $content['parent_id'] = $this->faasaleleaga_id;
        $content['name'] = "Salelologa";
        $content['content'][] = ["Salelologa" => ["Afio mai Ti'a ma le aiga o Saluamanuvae ma la outou tama o Tinousi",
            "Susu mai Su'a ma le Aiga",
            "Susu mai le Fuaiala o le malelega a le Malietoa",
            "Maliu mai le Falefia ma le Falesalafai, na e lave i Manino lave i A'ava",
            "O le logo ga pule ma le Faitoaga",
            "Falefia (Taotua, Pipi, Matamua, ma Fonoia)",
            "Falesalafai (Seumanu, Pauli, Fiu)"]];
        $content['content'][] = ["Malaefono" => ["Malaefatu (Tua o Fiufatu)"]];
        return $content;
    }

    function getSalelavalu() {

        $content = [];
        $content['id'] = $this->faasaleleaga_id + 3;
        $content['parent_id'] = $this->faasaleleaga_id;
        $content['name'] = "Salelavalu";
        $content['content'][] = ["Salelavalu" => ["Susu mai le Maopu o Nafanua, o lau susuga Su'a ma le Aumaga o le Tupu na tausi e Safotulafai",
            "Susu mai Su'aalii, o le fofoga o le aiga Sa Su'a",
            "Afio lau Afioga Tusani ma le aiga o Sa Tusani",
            "Afio mai Tauma'opu (Olomautu)",
            "Afio mai le Taofia (Muni, Mase, ma le Suafa Lelevaga)",
            "Maliu mai le mamalu ia Sa Silafaga"]];
        $content['content'][] = ["Malaefono" => ["Malaeloa"]];
        return $content;
    }

    function getIva() {

        $content = [];
        $content['id'] = $this->faasaleleaga_id + 4;
        $content['parent_id'] = $this->faasaleleaga_id;
        $content['name'] = "Iva";
        $content['content'][] = ["Iva" => ["Afio mai le Aiga o Salevalasi",
            "Afio mai le tootoo alii (Tofilau)",
            "(O oe na iva i ai aiga o Malietoa)",
            "Afio mai Tagaileono ma le aiga Sa Tagaileono",
            "Maliu mai lau fetalaiga Leauanae",
            "Maliu mai le nofo a ituaiga ia Sasulu"]];
        $content['content'][] = ["Malaefono" => ["Avea - Tua o Fuifatu"]];

        $content['content'][] = ["Vaisaulu" => ["Afio mai lau Afioga Tuioti",
            "Susu mai le Muliagatele ma le Toainafo",
            "Maliu mai lau fetalaiga Ti'a",
            "Maliu mai oe le Salemuliaga"]];

        $content['content'][] = ["Lalomalava" => ["Susu mai lau susuga a le Gatoloai Faana o le tupu na tausi",
            "Susu mai le falefa o alo o Atiulagi (Manusauloa, Vevelautalo, Alaimoana ma Faafilogo)",
            "Afio mai Taito ma le Usoalii (Tumanuvao, Feaulia ma Migi)",
            "Maliu mai le nofo a ituaiga ma upu ia te oe Safuamua"]];

        $content['content'][] = ["Safua" => ["Susu mai lau susuga a le Tuisafua",
            "Afio mai le gafa (Soana'i ma Patane)",
            "Susu mai aiga ma le susuga ia Tuilaepa",
            "Maliu mai lau fetalaiga Tevaga, o le Tapaau fanua, o le Matua",
            "Maliu mai le faleono"]];

        $content['content'][] = ["Malaefono" => ["Poata", "Falema'i"]];

        $content['content'][] = ["Vaiafai" => ["Susu mai lau susuga a le Tagaloa",
            "Susu mai Taito ma Leota",
            "Maliu mai Taulauniu ma Aitutagata (Sae ma Fataloto ma o oulua fofoga Moemai ma Lealiie'e)",
            "Maliu mai Lelafaaua o lau fetalaiga Oloapu"]];
        return $content;
    }

    function getSapapalii() {

        $content = [];
        $content['id'] = $this->faasaleleaga_id + 5;
        $content['parent_id'] = $this->faasaleleaga_id;
        $content['name'] = "Sapapali'i";
        $content['content'][] = ["Sapapali'i" => [
            "Susu mai Malietoa na faalogo i ai Samoa",
            "Susu mai To'oā, o le Sa'o na lua",
            "Susu mai le aiga Sa Malietoā ma le Alalafaga o Usoalii (Papalii, Seiuli, Tuilaepa, Memea, Sala'a)",
            "Maliu mai le matua o Mago ma i la'ua o Luasiufanua"]];
        $content['content'][] = ["Malaefono" => ["Mataniufeagaimaleata"]];
        return $content;
    }

    function getSafotulafai() {

        $content = [];
        $content['id'] = $this->faasaleleaga_id + 6;
        $content['parent_id'] = $this->faasaleleaga_id;
        $content['name'] = "Safotulafai";
        $content['content'][] = ["Safotulafai" => [
            "Afio mai Leilua ma le To'alima o ou alo (Tau'ili'ili, Tuisa'emo, 'Ae, Mata'utia, Agavale)",
            "Afio mai Sa Alalatoa (Pa'u, Letufuga, Tuma'ai ma le Matua o Alalatoa)",
            "Susu mai Alo o Malietoa (Moananu ma Taulapapa)",
            "Maliu mai le na Aimalae (Fau'olo)",
            "Maliu mai Ma'opu Tufuga ma le Lautinalalelei ia Safotulafai",
            "Susu mai Letufuga Pule",
            "Susu mai Letufuga To'atama'i",
            "Susu mai Letufuga Alofa ma lau Fa'atufugaga",
            "Maliu mai la oulua fetalaiga Tuilagi ma Namulau'ulu ma le mamalu o oe Safotulafai"]];
        $content['content'][] = ["Malaefono" => ["Ga'utaala - Fuifatu", "Gataiala - Ma'auga"]];

        $content['content'][] = ["'Eve'eve ma Vaimaga" => [
            "Afio mai Leilua ma le To'alima o ou alo",
            "Afio mai Sa Alalatoa (Letufuga, Tuma'ai)",
            "Maliu mai Ma'opu Tufuga ma le mamalu ia te oe Safotulafai"]];

        $content['content'][] = ["Fuifatu ma Fusi" => [
            "Afio mai Leilua ma le To'alima o ou alo",
            "Afio mai Sa Alalatoa (Pa'u i Olopoto)",
            "Maliu mai Ma'opu Tufuga",
            "Maliu mai lau Tofa Fau'olo, o le na Aimalae",
            "ma le Mamalu ia te oe Safotulafai"]];

        $content['content'][] = ["Fatausi" => [
            "Afio mai Alii o le Au Fono (Tauiliili)",
            "Afio mai lau Afioga Leilua",
            "Afio mai le Suafa o Kea",
            "Maliu mai Tuilagi ma lau Au Fono (Pasia, Legaoi, Tano, Tuifiti Fa'asalaia'i",
            "ma le Mamalu ia te oe Safotulafai"]];

        $content['content'][] = ["Fogapoa" => [
            "Susu mai alo o Malietoa (Moananu, Taulapapa)",
            "Susu mai le Tei o Leota",
            "Afio mai le Ma'opu o Fepulea'i",
            "Maliu mai Namulau'ulu ma le aiga Sa Namulau'ulu",
            "Maliu mai le Falefia ma le Matua o Laufiso (Falefia o Su)"]];

        $content['content'][] = ["Tuasivi" => [
            "Afio mai le aiga Sa Alalatoa, Pa'u me le matua o Alalatoa",
            "Maliu mai le Ma'opu Tufuga (Lema'i)",
            "Malie mai le Tapuafanua o le eleele (Motunuu)",
            "Mamalu mai le Fuaiala o le Tuiatua o le Mua'au faalele a le Safotulafai"]];


        return $content;
    }

    function getTapueleele() {

        $content = [];
        $content['id'] = $this->faasaleleaga_id + 7;
        $content['parent_id'] = $this->faasaleleaga_id;
        $content['name'] = "Tapueleele";
        $content['content'][] = ["Tapueleele" => [
            "Afio mai Salevalasi",
            "Afai mai Tagaloatea",
            "Faapea foi lau susuga Tagaloa",
            "Maliu mai Maopu Tufuga",
            "Faapea le Vainalepa ma le Lautinalaulelei, i le nofo a aufono, Pau ma Puna e oo i le pa i Aeaauli",
            "ma le mamalu ia Safotulafai"]];
        $content['content'][] = ["Malaefono" => ["Limuula"]];
        return $content;
    }

    function getFaga() {

        $content = [];
        $content['id'] = $this->faasaleleaga_id + 8;
        $content['parent_id'] = $this->faasaleleaga_id;
        $content['name'] = "Faga";
        $content['content'][] = ["Faga (Aotelega)" => [
            "Afio mai ia lo outou toaono o alii o le Faga (Unasa, Nonumalo, To'ala, Leafinealii, Ufagalilo, Sooaemalelagi)",
            "Afai mai ia le Taulagi (Vaafusuaga, Toleafoa)",
            "Maliu mai lo outou toafa (Pigi, Vaisau, Laufiso, Tapuala) ma tagata matutua",
            "Ma upu ia te oe le Faleaana ma le Salemuliaga"]];

        $content['content'][] = ["Fuaiaia o Faga" => [""]];

        $content['content'][] = ["Si'ufaga" => [
            "Afio mai lo outou aiga Sa Unasa",
            "Afio mai lau Afioga Maseuli",
            "Afio mai Vaafusuaga",
            "Maliu mai Laufiso ma Tapuala ma le Musuia ma Sa Luasã",
            "Maliu mai le Faleaana"]];

        $content['content'][] = ["Sapigi" => [
            "Afio mai lau Afioga Unasa",
            "Afio mai lau Afioga Leafinealii",
            "Afio mai lau Afioga Sooaemalelagi",
            "Maliu mai lau fetalaiga Pigi ma oe Sa Pigi",
            "Maliu mai oe le Faleaana"]];

        $content['content'][] = ["Malaefono" => ["Maota - Tua o Fuifatu"]];

        $content['content'][] = ["Lu'ua" => [
            "Afio mai le na faasa'osa'o (Nonumalo)",
            "Afio mai le suafa o Toala",
            "Afio mai le falefia o Ma'opu",
            "Susu mai le susuga a le Toetagata",
            "Maliu mai lau fetalaiga Tuileutu ma le mamalu tele ia Sa Luasã"]];

        $content['content'][] = ["Malaefono" => ["Leutu"]];

        $content['content'][] = ["Malae" => [
            "Afio mai lo outou aiga Sa Toala",
            "Afio mai Tofa ma Tauiliili ma le Afioga a le Matuaalii (Vaisaualii)",
            "Maliu mai lau fetalaiga Vaisau ma le Ativaisau",
            "Maliu mai oe Salemuliaga ma le Faleaana"]];

        $content['content'][] = ["Salimu" => [
            "Afio mai lau Afioga Ufagalilo ma lou Usoalii (Tupua, Amitua)",
            "Afio mai ia Toleafoa",
            "Maliu mai lau fetalaiga Taua, ma upu ia te oe Salimu"]];
        return $content;
    }

    function getAmoaisasae() {

        $content = [];
        $content['id'] = $this->faasaleleaga_id + 9;
        $content['parent_id'] = $this->faasaleleaga_id;
        $content['name'] = "Amoa i Sasa'e";
        $content['content'][] = ["Aotelega o Sa'asa'ai ma Saipipi" => [
            "Afio mai ia Taulagi (Vaafusuaga, Toleafoa)",
            "Afai mai Tofa",
            "Susu mai lau susuga Su'a o le Ma'opu",
            "Maliu mai oe le matua fetalai (Segi)",
            "Maliu mai oe le Pule a Leu'u ma Salemuliaga"]];

        $content['content'][] = ["Sa'asa'ai" => [
            "Afio mai le Usoalii (Vaafusuaga, Tea)",
            "Afio mai alii na paea le aufono (Aifitu, Afoa)",
            "Maliu mai oe le matua fetalai (Segi)",
            "Maliu mai oe le Pule (Leu'u)",
            "Maliu mai lo oulua falelua (Sao, Faumaua)",
            "Maliu mai Salemuliaga"]];

        $content['content'][] = ["Malaefono" => ["Faleloa - O le tua o Fuifatu"]];

        $content['content'][] = ["Saipipi" => [
            "Afio mai le Taulagi i lau Afioga Tofa",
            "Afio mai le Usoalii (Vaiga, Vaigaga, Tavana)",
            "Susu mai Su'a o le Ma'opu o le Taulagi",
            "Afio mai lau Afioga Tupologa",
            "Afio mai le alo o Vaafusuaga (Utumapu)",
            "Maliu mai le Falefitu",
            "Maliu mai le fetalaiga ia Tavaufaiga ma upu ia te oe Salemuliaga"]];

        $content['content'][] = ["Malaefono" => ["Taotooto"]];

        return $content;
    }
    
    function getAmoaisisifo() {

        $content = [];
        $content['id'] = $this->faasaleleaga_id + 10;
        $content['parent_id'] = $this->faasaleleaga_id;
        $content['name'] = "Amoa i Sisifo";
        $content['content'][] = ["Lano, Asaga, Puipa'a" => [
            "Afio mai le Falefia o Alo o Sa Vui (O Satuala foi na)",
            "Vui Umumalu, Vui Tafilipepe, Vui Seigafolava, Vui Alafouaina (teine)",
            "Susu mai lau susuga I'iga o le Ma'opu",
            "Afio maia lau afioga Falenaoti (Ma'opu lava lea)",
            "Afio Alo o Vaafusuaga, Lutu ma Ape ma lau susuga Su'a",
            "Maliu mai lau fetalaiga Malaeulu le Matua Fetalai",
            "Maliu mai Salemuliaga, o le faleupolu o tofiga"]];

        $content['content'][] = ["Malaefono" => ["Maota"]];

        $content['content'][] = ["Asaga" => [
            "Afio Sa Matafeo ma le Matua (Lualua)",
            "Afio mai lau Afioga Tuifeama'alo",
            "Maliu mai lau fetalaiga Leatuavao",
            "ma upu ia Salepatū ma Salemuliaga",
            "(E ao lava ia Falenaoti ona fa'amalumalu)"]];

        $content['content'][] = ["Pu'apu'a" => [
            "Afio le aiga Sa Pesetã (Sa Tuala)",
            "Susu mai I'iga le Ma'opu (O ia foi o le Falenaoti)",
            "Afio mai le Matua o Lemalu",
            "Afio mai Ugapo ma Sauia na fuaao ia Salemuliaga",
            "Maliu mai le Pule a Sealiimalietoa",
            "Maliu mai oe Salemuliaga"]];

        $content['content'][] = ["Malaefono" => ["Olomaile"]];

        return $content;
    }
}
