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
    function getItumalo()
    {
        $data = [
            ["id"=>200, "name"=>"Fa'asalele'aga","parent_id"=>3, "content"=>["Fa'alupega o Fa'asalele"]]
        ];
        return $data;
    }

    function getNuus() {

        $ret = [];
        $ret[] = $this->getTafua();
        $ret[] = $this->getSalelologa();
        $ret[] = $this->getSalelavalu();
        $ret[] = $this->getIva();
        $ret[] = $this->getSapapalii();
        $ret[] = $this->getSafotulafai();
        $ret[] = $this->getTapueleele();
        return $ret;
    }

    /*  Eveeve ma Vaimauga
        Fuifatu ma Fusi
        Fatausi
        Fogapoa
        Tuasivi */

    function getTafua() {

        $content = [];
        $content['id'] = 201;
        $content['parent_id'] = 200;
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
        $content['id'] = 202;
        $content['parent_id'] = 200;
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
        $content['id'] = 203;
        $content['parent_id'] = 200;
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
        $content['id'] = 204;
        $content['parent_id'] = 200;
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
        $content['id'] = 205;
        $content['parent_id'] = 200;
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
        $content['id'] = 206;
        $content['parent_id'] = 200;
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
        return $content;
    }

    function getTapueleele() {

        $content = [];
        $content['id'] = 207;
        $content['parent_id'] = 200;
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
}