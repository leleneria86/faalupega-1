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
    function getItumalo()
    {
        $data = [
            ["id"=>1, "name"=>"Launiusaelua","parent_id"=>1, "content"=>["Afio maia lau Afioga Mauga, o le tama fa'asausau a Sua ma le Vaifanua, Fofo ma Itulagi, Itu'au ma Alataua",
                "Susu mai Sa'ousoali'i",
                "Susu mai Ma'opu (Tei ma Anoalo)",
                "Mamalu mai lau tofa Tua'olo na faleagaulu ai le motu, ma le Launiusaelua"]]
        ];
        return $data;
    }

    function getNuus() {

        $ret = [];
        $ret[] = $this->getAua();
        $ret[] = $this->getLeloaloa();
        $ret[] = $this->getPagoPago();
        $ret[] = $this->getFagatogo();
        $ret[] = $this->getFagaalu();
        return $ret;
    }

    function getAua() {

        $aua = [];
        $aua['id'] = 1;
        $aua['parent_id'] = 1;
        $aua['name'] = 'Aua';
        $aua['content'][] = ["Aua" => ["Afio mai le Sa'ousoali'i (Unutoa)",
            "Afio mai le Matua o Lifau o le Tama a Aitu ma Tagata",
            "Susu mai le faleono (Uli, Niumatalolo, Ponausuia, Saoimanulua, Tilo, Afu)",
            "Mamalu mai le fetalaiga ia Paopaoailua ma Tufaga me le launiusaelua"]];
        $aua['content'][] = ["Malaefono" => ["Paepaeulupo'o", "Paepae alå"]];
        return $aua;
    }

    function getLeloaloa() {

        $aua = [];
        $aua['id'] = 2;
        $aua['parent_id'] = 1;
        $aua['name'] = 'Leloaloa';
        $aua['content'][] = ["Leloaloa" => ["Afio mai oulua Ma'opu (Faumuina ma Uti)",
            "susu mai le ali'i o le ao (Vaivao)",
            "Maliu mai la oulua fetalaiga (Loloaso ma Tauanuu)",
            "Mamalu mai le lauti na laulelei i le Launiusaelua"]];
        $aua['content'][] = ["Malaefono" => ["Tala o Gagamoe"]];
        return $aua;
    }

    function getPagoPago() {

        $aua = [];
        $aua['id'] = 3;
        $aua['parent_id'] = 1;
        $aua['name'] = 'Pago Pago';
        $aua['content'][] = ["Pago Pago" => ["Afio mai Mauga o le Ma'oputasi,",
            "o le Tama fa'asausau o Sua ma le Vaifanua, Fofo ma Aitulagi, Itu'au ma Alataua",
            "Susu mai Tei (Fanene, Uifa'atali, Lealaifuaneva)",
            "Susu mai Anoalo (Te'o, Asuega, Tiumaletavai, Olotoa, Leota)",
            "Susu mai Matua (Taito, Pulumataala)",
            "Susu mai Nofo fanau (Ni, Vaivao)",
            "Susu mai Anoaloifale (Lea'oa, Fa'afitinalo)",
            "Mamalu mai lau tofa Tua'olo na Faleagafulu ai le motu",
            "ma le Falefa (Fuga, Mageo, Poiali'i, Logo",
            "Maliu mai oe le Launiusaelua"]];
        $aua['content'][] = ["Malaefono" => ["Gagamoe"]];
        return $aua;
    }

    function getFagatogo() {

        $aua = [];
        $aua['id'] = 4;
        $aua['parent_id'] = 1;
        $aua['name'] = 'Fagatogo';
        $aua['content'][] = ["Fagatogo" => ["Afio mai le Sa'ousoalii (Lutu)",
            "Susu mai le Toealii (Ma'ilo)",
            "Susu mai oulua Tapunuu (Faagata ma Tiumalu)",
            "Afio mai le Aloalii (Afoafouvale)",
            "Maliu mai le fetalaiga ia Taesalialii ma Taamuvaigafa",
            "Mamalu mai upu i le Launiusaelua ia te outlua Tinaeatule ma Faasamisamia"]];
        $aua['content'][] = ["Malaefono" => ["Malaeoletalu"]];
        return $aua;
    }

    function getFagaalu() {

        $aua = [];
        $aua['id'] = 4;
        $aua['parent_id'] = 1;
        $aua['name'] = 'Fagaalu';
        $aua['content'][] = ["Fagaalu" => ["Afio mai le Afioga i Ma'opu (Fano, Amituana'i)",
            "Susu mai le Nofo Fanau (Naisoa)",
            "Maliu mai le Launiusaelua (Usoagalelei ma Faatiliga)",
            "Ma le Lauti na Laulelei"]];
        $aua['content'][] = ["Malaefono" => ["Vaovai"]];
        return $aua;
    }
}