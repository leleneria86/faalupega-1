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
    protected $parent_id = 2000;
    protected $aana_id = 2100;
    protected $atua_id = 2200;
    protected $tuamasaga_matu_id = 2300;

    function getItumalo()
    {
        $data = [
            ["id"=>$this->aana_id, "name"=>"A'ana","parent_id"=>$this->parent_id, "content"=>["Fa'alupega o A'ana"]],
            ["id"=>$this->atua_id, "name"=>"Atua","parent_id"=>$this->parent_id, "content"=>["Fa'alupega o Atua"]],
            ["id"=>$this->tuamasaga_matu_id, "name"=>"Tuamasaga i Matu","parent_id"=>$this->parent_id, "content"=>["Fa'alupega o Tuamasaga"]]
        ];
        return $data;
    }

    function getAana() {

        $ret = [];
        $ret[] = $this->getFaleasiu();
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
        $tuamasaga_matu = $this->getTuamasagaMatu();
        return array_merge($aana, $tuamasaga_matu);
    }

    function getTuamasagaMatu() {

        $ret = [];
        $ret[] = $this->getLaulii();
        $ret[] = $this->getLetogo();
        $ret[] = $this->getSaleupolu();
        $ret[] = $this->getFuaiupolu();
        $ret[] = $this->getSagauga();
        return $ret;
    }

    function getLaulii() {

        $content = [];
        $content['id'] = $this->tuamasaga_matu_id + 1;
        $content['parent_id'] = $this->tuamasaga_matu_id;
        $content['name'] = "Lauli'i";
        $content['content'][] = ["Lauli'i" => [
            "Afio mai le paia o Salevalasi",
            "Afio mai oe le Sa'oalii, lau Afioga Leniu",
            "Susu mai alo o Leniu (Mapusua, Fuamatu)",
            "Susu mai le Matua o Taliulu",
            "Afio mai le Faga o Alii",
            "Susu mai Fuatimau ma Mauletauaā",
            "Susu mai oe Tuisamau ma Ituala e fia",
            "Mamalu maia oe le Faleatua"]];
        $content['content'][] = ["Malaefono" => ["Fanuatanu"]];
        return $content;
    }

    function getLetogo() {

        $content = [];
        $content['id'] = $this->tuamasaga_matu_id + 2;
        $content['parent_id'] = $this->tuamasaga_matu_id;
        $content['name'] = "Letogo";
        $content['content'][] = ["Letogo" => [
            "Afio mai oulua fofoga o Alataua (Tuliaupupu ma Tuliaupupu)",
            "Susu mai oulua le Usoalii (Pilimai ma Faletagoa'i)",
            "Susu mai le matua o Tuliaupupu (Atuaia)",
            "Susu mai le Teialii (Fina'i) ma le Alo o Malietoa (Sagagaimuli)",
            "Afio mai Alo o Tuliaupupu (Muliagatele ma Tauiliili)",
            "Susu mai Tuisamau, i lau fetalaiga Mauletauaā ma le nofo a ituaiga ia te oe Tuisamau"]];
        $content['content'][] = ["Malaefono" => ["Lalotea"]];
        return $content;
    }

    function getSaleupolu() {

        $content = [];
        $content['id'] = $this->tuamasaga_matu_id + 3;
        $content['parent_id'] = $this->tuamasaga_matu_id;
        $content['name'] = "Saleupolu (Vailele, Niniva ma Fagali'i)";
        $content['content'][] = ["Saleupolu (Vailele, Niniva ma Fagali'i)" => [
            "Afio mai le Falefia o Alii (Samoa, Tavui, Taufagaafa) ma lo outou Maopu (Savaiinaea)",
            "Susu mai le Gataiala (Ulumalautea, Tofele)",
            "Afio mai Alalatama (Fuamatu ma Fuamatu)",
            "Susu mai Tuisuga, Letaua ma Luamanuvae",
            "Maliu mai oulua nofoa (Lefau ma Tapuanai) ma le Tuanofoa (Lemau)",
            "Maliu mai Pulemagafa o le Faiga",
            "Maliu mai e na talia le Tanoa (Leatitagaloa ma Puna)",
            "Maliu mai le nofo a ituaiga ia te oe Saleupolu"]];

        $content['content'][] = ["Vailele ma Niniva" => [
            "Afio mai le Falefia o Alii ma lo outou Maopu",
            "Susu mai le Gataiala",
            "Maliu mai oulua nofoa ma le Tuanofoa",
            "Mamalu maia le nofo a ituaiga ia te oe Saleupolu"]];

        $content['content'][] = ["Fagali'i" => [
            "Afio mai Alalatama",
            "Susu mai Tuisuga, Letaua ma Luamanuvae",
            "Maliu mai Pulemagafa o le Faiga",
            "Maliu mai e na talia le Tanoa",
            "Mamalu maia oe Saleupolu\""]];

        $content['content'][] = ["Malaefono" => ["Niniva ma Punialavaa"]];
        return $content;
    }

    function getFuaiupolu() {

        $content = [];
        $content['id'] = $this->tuamasaga_matu_id + 3;
        $content['parent_id'] = $this->tuamasaga_matu_id;
        $content['name'] = "Fualiupolu (Moata'a, Vaiala, Magiagi)";
        $content['content'][] = ["Fualiupolu (Moata'a, Vaiala, Magiagi)" => [
            "Afio mai lau Afioga a le Matua (Tofaeono)",
            "Susu mai Asi ma Patu",
            "Afio mai Aiga e tolu (Savea - Tofaeono, Luamanuvao - Patu, Falenaipupu - Asi)",
            "Afio mai le Usoalii (Luafau, Tuiono, Lupetaliaami)",
            "Maliu mai oulua na ta'i (Tamapua, Manogiamanu)",
            "Maliu mai le mamalu i le nofo a ituaiga ia te oe Fuata",
            "Maliu mai Ataga ma Sãataga"]];

        $content['content'][] = ["Vailele ma Niniva" => [
            "Afio mai le Falefia o Alii ma lo outou Maopu",
            "Susu mai le Gataiala",
            "Maliu mai oulua nofoa ma le Tuanofoa",
            "Mamalu maia le nofo a ituaiga ia te oe Saleupolu"]];

        $content['content'][] = ["Fagali'i" => [
            "Afio mai Alalatama",
            "Susu mai Tuisuga, Letaua ma Luamanuvae",
            "Maliu mai Pulemagafa o le Faiga",
            "Maliu mai e na talia le Tanoa",
            "Mamalu maia oe Saleupolu\""]];

        $content['content'][] = ["Malaefono" => ["Falefatu"]];
        return $content;
    }

    function getSagauga() {

        $content = [];
        $content['id'] = $this->tuamasaga_matu_id + 3;
        $content['parent_id'] = $this->tuamasaga_matu_id;
        $content['name'] = "Sagauga (Matutu, Apia, Tanugamanono)";
        $content['content'][] = ["Sagauga (Matutu, Apia, Tanugamanono)" => [
            "Afio mai alo o Sina (Seumanutafa, Toomalatai)",
            "Afio mai le Fuaifale o Salevalasi (Tamaseu, Faualo)",
            "Afio mai laua Matua (Onofiatele, Faaolesa)",
            "Afio mai le Usoalii (Tupuola, Faumuina, Siligatusa)",
            "Afio mai Leupolu ma Tuisaula o Matua o Toomalatai",
            "Susu mai le aiga o Sa Malietoa",
            "Afio mai le paia eseese o aiga",
            "Susu mai oe Tuisamau (Feagaimaalii, Samau)",
            "Maliu mai le fetalaiga ia te oe le Faletou (Pupualii, Tuiletufuga, Letaa) ma upu i le Vainalepa"]];

        $content['content'][] = ["Matautu" => [
            "Afio mai le Alo o Sina (Toomalatai)",
            "Susu mai oe Tuisamau (Feagaimaalii, Samau)",
            "Maliu mai le fetalaiga ia te oe le Faletou ma oe le Vainalepa"]];

        $content['content'][] = ["Apia" => [
            "Afio mai le Alo o Sina (Seumanutafa)",
            "Afio mai le Fuaifale o Salevalasi (Tamaseu, Faualo)",
            "Afio mai laua Matua (Onofiatele, Faaolesa)",
            "Susu mai le aiga o Sa Malietoa",
            "Afio mai le paia eseese o aiga",
            "Maliu mai oe le Faletou ma le Vainalepa"]];

        $content['content'][] = ["Tanugamanono" => [
            "Afio mai le Usoalii (Tupuola, Faumuina, Siligatusa)",
            "Afio mai oulua Matua o Toomalatai (Leupolu, Tuisaula)",
            "Susu mai alo o Malietoa (Utuota, Utulomianuu, Fetaoa'i, Atoa, Fuaiupolu, Laamalefolasa)",
            "Mamalu maia oe le Faletou ma le Vainalepa"]];

        $content['content'][] = ["Malaefono" => ["Motootua", "Sinave"]];
        return $content;
    }

    function getFaleasiu() {

        $content = [];
        $content['id'] = $this->aana_id + 10;
        $content['parent_id'] = $this->aana_id;
        $content['name'] = "Faleasi'u";
        $content['content'][] = ["Faleasi'u" => [
            "Afio mai le aiga o Mavaega (Maiava, Tamapaa, Matua o Talamatãvao)",
            "Afio mai le aiga Satuala (Leaupepetele, Leaupepeifilia)",
            "Afio mai Mailo, o le tama a aitu ma le maugafa, oe le Tapunuu",
            "Afio mai le alo o Tamaalelagi (Tuitama)",
            "Afio mai lau Afioga (Tofa)",
            "Maliu mai oe le Faletolu ma le Fuaifale ma le lautinalaulelei"]];
        $content['content'][] = ["Malaefono" => ["Vaifoa"]];
        return $content;
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