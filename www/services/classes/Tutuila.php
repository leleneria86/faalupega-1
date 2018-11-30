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
    protected $saole_id = 1400;
    protected $ituau_id = 1500;
    protected $tualauta_id = 1600;
    protected $pitonuus = [];

    function getItumalo()
    {
        $data = [
            ["id"=>$this->launiusaelua_id, "name"=>"Launiusaelua","motu_id"=>$this->motu_id, "content"=>["Afio maia lau Afioga Mauga, o le tama fa'asausau a Sua ma le Vaifanua, Fofo ma Itulagi, Itu'au ma Alataua",
                "Susu mai Sa'ousoali'i",
                "Susu mai Ma'opu (Tei ma Anoalo)",
                "Mamalu mai lau tofa Tua'olo na faleagaulu ai le motu, ma le Launiusaelua"]],
            ["id"=>$this->sua_id, "name"=>"Sua","motu_id"=>$this->motu_id, "content"=>["Afio mai Sua"]],
            ["id"=>$this->vaifanua_id, "name"=>"Vaifanua","motu_id"=>$this->motu_id, "content"=>[""]],
            ["id"=>$this->saole_id, "name"=>"Sa'ole","motu_id"=>$this->motu_id, "content"=>["Afio maia lau afioga Faumuina, ma aiga","Susu mai Lupega","Susu mai le matua (Utu) ma le suafa o Gogo","Mamalu mai oulua le Sa'ole"]],
            ["id"=>$this->ituau_id, "name"=>"Itu'au","motu_id"=>$this->motu_id, "content"=>["Susu mai Mo'opu, ma le to'afia o alii",
                                                                                           "Susu mai oulua matua (Savea, Leaeno)",
                                                                                           "mamalu mai le fetalaiga i le falevalu (Lagafuaina, Maluia, Taufetee, Seui, Sili, Atuatasi, Tua, Vaitausala)"]],
            ["id"=>$this->tualauta_id, "name"=>"Tualauta","motu_id"=>$this->motu_id, "content"=>["Afio mai lau afioga a le Punefu (Letuli)",
                                                                                           "Susu mai le nofo-a-Sa'o",
                                                                                           "ma e na taimatalii i le Tualauta",
                                                                                           "Mamalu mai upu ia te outou nofo-a-pule o le Alataua"]]

        ];
        return $data;
    }

    function getNuus() {

        $launiusaelua = $this->getLauniusaelua();
        $sua = $this->getSua();
        $saole = $this->getSaole();
        $vaifanua = $this->getVaifanua();
        $ituau = $this->getItuau();
        //$tualauta = $this->Tualauta();
        return array_merge($launiusaelua, $sua, $saole, $vaifanua, $ituau);//, $tualauta);
    }

    function getPitonuus() {

        return $this->pitonuus;
    }
    
//     function getTualauta() {
//         $ret = [];
//         $ret[] = $this->getTafuna();
//         $ret[] = $this->getFaleniu();
//         return $ret;
//     }
    
    function getTafuna() {
        $nuu = [];
        $nuu['id'] = $this->tualauta_id + 1;
        $nuu['motu_id'] = $this->motu_id;
        $nuu['itumalo_id'] = $this->tualauta_id;
        $nuu['name'] = "Tafuna";
        $nuu['content'][] = ["Tafuna" => [
            "Afio mai lau afioga i le Sa'o (Fonoti)",
            "Susu mai le ulua'i sa'o (Maugamua)",
            "Susu mai Ma'opu (Lie, Lauofo)",
            "Maliu mai lau fetalaiga Fagaima ma lou matafagatele"]];
        $nuu['content'][] = ["Malaefono" => ["Moeitai"]];
        return $nuu;
    }
    
    function getFaleniu() {
        $nuu = [];
//         $nuu['id'] = $this->tualauta_id + 2;
//         $nuu['motu_id'] = $this->motu_id;
//         $nuu['itumalo_id'] = $this->tualauta_id;
//         $nuu['name'] = "Faleniu";
//         $nuu['content'][] = ["Faleniu" => [
//             "Afio mai le sa'o o Magalei ma le Matua o Muasau",
//             "Afio mai Aiono ma Solatoa, o tei o Magalei",
//             "Afio mai le falefia o Taupolo (Savea, Alaiasa, Lili'i)",
//             "Afio mai le tama a Aitulagi (Malufau)",
//             "Susu mai Taumafaalofi (Tuiaana, Maea)",
//             "Susu mai le ma'opu o Tuiaana (Maiava)",
//             "Alala mai i la'ua na totoe (Seigafo, Moea'itino)",
//             "Maliu mai le fetalaiga is Siuolefanuafaiga"]];
//         $nuu['content'][] = ["Malaefono" => ["Malaeimi","Faleniu"]];
        return $nuu;
    }
    
    function getItuau() {
        $ret = [];
        $ret[] = $this->getFagasa();
        $ret[] = $this->getMatuu();
        $ret[] = $this->getNuuuli();
        return $ret;
    }
        
    function getFagasa() {
        $nuu = [];
        $nuu['id'] = $this->ituau_id + 1;
        $nuu['motu_id'] = $this->motu_id;
        $nuu['itumalo_id'] = $this->ituau_id;
        $nuu['name'] = "Fagasa";
        $nuu['content'][] = ["Aoao tetele o Fagasa" => [
            "Afio mai le toafia o alii",
            "Susu mai le Matua ma usaoalii",
            "Mamalu mai lo outou to'afa ma le Lauti na laulelei",
            "Ma upu ia te oe Itu'au"]];
        $nuu['content'][] = ["Faga Tele" => [
            "Afio mai Tupuola",
            "Susu mai le alii o aiga (Tuinei)",
            "Susu mai Tauatama ma Tupua",
            "Mamalu mai lo oulua to'alua (Sili, Tua)"]];
        $nuu['content'][] = ["Faga Le'a" => [
            "Afio mai le afioga ia Alo, o oe o le Sa'o, ma lou nofoa vaevae loloa",
            "Afio mai le matua o Mamea",
            "Susu mai Tago ma Lealaisalanoa ma le Fuimaono",
            "Susu mai Faiumu ma Suesueamanogi ma Tua i Vaotu",
            "Maliu mai lau tofa le Vaitausala",
            "Faapea le lauti na laulelei"]];
        $nuu['content'][] = ["Malaefono" => ["Malaepule","Malaeti'a"]];
        return $nuu;
    }
    
    function getMatuu() {
        $nuu = [];
        $nuu['id'] = $this->ituau_id + 2;
        $nuu['motu_id'] = $this->motu_id;
        $nuu['itumalo_id'] = $this->ituau_id;
        $nuu['name'] = "Matuu ma Faganeanea";
        $nuu['content'][] = ["Matuu ma Faganeanea" => [
            "Susu maia oulua Matua (Savea, Leaeno)",
            "Susu mai vae o lo oulua tootoo (Taito, Afo)",
            "Alala mai lau Tofa Faagau o le Launatausala ia Itu'au",
            "Ma le mamalu ia te oe Itu'au"]];
        $nuu['content'][] = ["Malaefono" => ["Vainiu"]];
        return $nuu;
    }
    
    function getNuuuli() {
        $nuu = [];
        $nuu['id'] = $this->ituau_id + 3;
        $nuu['motu_id'] = $this->motu_id;
        $nuu['itumalo_id'] = $this->ituau_id;
        $nuu['name'] = "Nuuuli";
        $nuu['content'][] = ["Nuuuli" => [
            "Afio mai Maopu (Levu, Tago, Savusa, Soliai)",
            "Susu mai Usoalii (Lavata'i, Leapagatele)",
            "Susu mai Taumafaalofi (Sialega, Fanene, Fagasoaia, Puailoa)",
            "Mamalu mai lo outou To'afa (Lagafuaina, Maluia, Taufetee, Seui)",
            "Mamalu mai upu i le Atimamea ma oe le Itu'au malosi"]];
        $nuu['content'][] = ["Malaefono" => ["Nuuuli", "Paepaeuli"]];
        return $nuu;
    }
    
    function getVaifanua() {
        $ret = [];
        $ret[] = $this->getAlao();
        $ret[] = $this->getTula();
        $ret[] = $this->getOnenoa();
        $ret[] = $this->getAoa();
        $ret[] = $this->getVatia();
        return $ret;
    }
    
    function getAlao() {
        $nuu = [];
        $nuu['id'] = $this->vaifanua_id + 1;
        $nuu['motu_id'] = $this->motu_id;
        $nuu['itumalo_id'] = $this->vaifanua_id;
        $nuu['name'] = "Alao";
        $nuu['content'][] = ["Alao" => [
            "Afio mai le alo o Salamasina (Satele)",
            "Susu mai ma'opu (Tapopo, Afemata)",
            "Susu mai le tamaitai (Tauaefa)",
            "Susu mai Tagaloa ma Tupuivao",
            "Afio mai ma Susu mai le Puaauli ma Sogimaletavai",
            "Maliu mai oulua Igoa matua (Faga, Lealao)",
            "Maliu mai le Fetalaiga ia Aveletalia ma Tiapula",
            "Maliu mai le Samatuafaiga ma le Fatuala",
            "O le fetalaiga lava lea i le Vaifanua ma le Sa'oleauta"]];
        $nuu['content'][] = ["Malaefono" => ["Malaeovevesi","Malaeaniu"]];
        return $nuu;
    }
    
    function getTula() {
        $nuu = [];
        $nuu['id'] = $this->vaifanua_id + 2;
        $nuu['motu_id'] = $this->motu_id;
        $nuu['itumalo_id'] = $this->vaifanua_id;
        $nuu['name'] = "Tula";
        $nuu['content'][] = ["Tula" => [
            "Afio mai Lealaisalanoa, o le tama a malili e fa, o le tei o Tupua",
            "Susu mai le matua o Iuli",
            "Susu mai le tagata o le Tuiatua (Togiai Aveau-Malaga tele)",
            "Susu mai Puuatuua ma le Atutufu",
            "Maliu mai la oulua fetalaiga, Vaa ma Tagoai",
            "Maliu mai Leatisanoe ma upu ia te oe Sa'oleauta, o le fetalaiga lava lea i le Vaifanua"]];
        $nuu['content'][] = ["Malaefono" => ["Malaeomanu","Siapotaga'i"]];
        return $nuu;
    }
    
    function getOnenoa() {
        $nuu = [];
        $nuu['id'] = $this->vaifanua_id + 3;
        $nuu['motu_id'] = $this->motu_id;
        $nuu['itumalo_id'] = $this->vaifanua_id;
        $nuu['name'] = "Onenoa";
        $nuu['content'][] = ["Onenoa" => [
            "Afio mai le alo o Sina (Toomalatai)",
            "Susu mai ma'opu (Vaovasa, Unaitafa)",
            "Susu mai Tuisamatatele",
            "Susu mai le Laulusa",
            "Maliu mai le fetalaiga ia Faiaipau ma Soiaimoa",
            "Maliu mai le Falefa, o upu lava ia i le Vaifanua ma le Sa'oleauta"]];
        $nuu['content'][] = ["Malaefono" => ["Malaefono"]];
        return $nuu;
    }
    
    function getAoa() {
        $nuu = [];
        $nuu['id'] = $this->vaifanua_id + 4;
        $nuu['motu_id'] = $this->motu_id;
        $nuu['itumalo_id'] = $this->vaifanua_id;
        $nuu['name'] = "Aoa";
        $nuu['content'][] = ["Aoa" => [
            "Susu mai Aumoeualogo",
            "Susu mai Teo",
            "Susu mai le Matua (Mamea)",
            "Afio mai le Aloalii (Luafalemana)",
            "Susu mai Afusia",
            "Maliu mai lo outou toafa (Lavea, Olomua, Mapuolesega, Aioletuna)",
            "Ma le fetalaiga ia Mauia, ma oe le Atimanutui e fa"]];
        $nuu['content'][] = ["Malaefono" => ["Lalotavai"]];
        return $nuu;
    }
    
    function getVatia() {
        $nuu = [];
        $nuu['id'] = $this->vaifanua_id + 5;
        $nuu['motu_id'] = $this->motu_id;
        $nuu['itumalo_id'] = $this->vaifanua_id;
        $nuu['name'] = "Vatia";
        $nuu['content'][] = ["Vatia" => [
            "Susu mai le tamaitai o le ao (Gaoteote)",
            "Susu mai Tagoilelagi",
            "Susu mai nofofanau (Alofaituli, Patea) o i la'ua o le tao veloaluga",
            "Susu mai Usoalii (Tagovailua, Taito, Nino, Tuna, Taulaga)",
            "Mamalu mai oulua Matua (Masaniai, Tuiasosopo)",
            "Ma upu ia te oulua le Saofaiga (Lauti, Uta, Afuola) ma le Lautinalaulelei"]];
        $nuu['content'][] = ["Malaefono" => ["Laloulu (O le tua o Malotumau, Fatulegaee ma Fagaitua"]];
        return $nuu;
    }
    
    function getSaole() {
        $ret = [];
        $ret[] = $this->getAunuu();
        $ret[] = $this->getUtumea();
        $ret[] = $this->getAmouli();
        $ret[] = $this->getAlofau();
        return $ret;
    }
    
    function getAunuu() {
        $nuu = [];
        $nuu['id'] = $this->saole_id + 1;
        $nuu['motu_id'] = $this->motu_id;
        $nuu['itumalo_id'] = $this->saole_id;
        $nuu['name'] = "Aunu'u";
        $nuu['content'][] = ["Aunu'u" => [
            "Afio mai Lupega o Lutali ma Lemafa",
            "Susu mai le Sa'o o Sagele",
            "Susu mai le tama a aiga (Fonoti)",
            "Susu mai Sa'ole, o le Ma'opu",
            "Mamalu mai oulua fofoga o le Sa'ole o Taufi ma Fuiava",
            "Faapea foi Saleaaumua (Tautolo, Lauvao, Matila)",
            "Mamalu mai lau tofa Sagato, o le launatausala ia Sa'ole ma Saleaaumua"]];
        $nuu['content'][] = ["Malaefono" => ["Malaefono"]];
        return $nuu;
    }
    
    function getUtumea() {
        $nuu = [];
        $nuu['id'] = $this->saole_id + 2;
        $nuu['motu_id'] = $this->motu_id;
        $nuu['itumalo_id'] = $this->saole_id;
        $nuu['name'] = "Utumea";
        $nuu['content'][] = ["Utumea" => [
            "Afio mai le sa'o (Fepuleai)",
            "Susu mai le Seetalaluma (Tauaa)",
            "Mamalu mai oulua fofoga, o Togia ma Sinanene"]];
        $nuu['content'][] = ["Malaefono" => ["Malaefono"]];
        return $nuu;
    }
    
    function getAmouli() {
        $nuu = [];
        $nuu['id'] = $this->saole_id + 3;
        $nuu['motu_id'] = $this->motu_id;
        $nuu['itumalo_id'] = $this->saole_id;
        $nuu['name'] = "Amouli";
        $nuu['content'][] = ["Amouli" => [
            "Afio mai Utu, o le matua o Faumuina",
            "Afio mai le suafa o Gogo",
            "Susu mai Alii o le Faloeono (Anae, Savea, Paolo, Moenoa, Leulua'i, Aofaga)",
            "Mamalu mai lau tofa Fuata ma le fofoga o Mamea",
            "Maliu mai oe le Sa'oloe"]];
        $nuu['content'][] = ["Malaefono" => ["Matāāva"]];
        return $nuu;
    }
    
    function getAlofau() {
        $nuu = [];
        $nuu['id'] = $this->saole_id + 4;
        $nuu['motu_id'] = $this->motu_id;
        $nuu['itumalo_id'] = $this->saole_id;
        $nuu['name'] = "Alofau";
        $nuu['content'][] = ["Alofau" => [
            "Afio mai lau Afioga a le Tupufia (Faumuina)",
            "Susu mai Anoalo (Titoiaivao, Ufagafa)",
            "Susu mai Uso Alii (Muagututia, Lealaitafea)",
            "Susu mai le aiga sa Alaivanu (Tago, Alaivanu, Toomata, Titialii)",
            "Susu mai le Tamaitai (Tauaa)",
            "Mamalu mai le oulua Fetalaiga, Tuatoo ma Muafono",
            "Ma upu ia te oe le Sa'ole"]];
        $nuu['content'][] = ["Malaefono" => ["Alo i Tafuna"]];
        return $nuu;
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
        $nuu['motu_id'] = $this->motu_id;
        $nuu['itumalo_id'] = $this->sua_id;
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
        $nuu['motu_id'] = $this->motu_id;
        $nuu['itumalo_id'] = $this->sua_id;
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
        $nuu['motu_id'] = $this->motu_id;
        $nuu['itumalo_id'] = $this->sua_id;
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
        $nuu['motu_id'] = $this->motu_id;
        $nuu['itumalo_id'] = $this->sua_id;
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
        $nuu['motu_id'] = $this->motu_id;
        $nuu['itumalo_id'] = $this->sua_id;
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
        $nuu['motu_id'] = $this->motu_id;
        $nuu['itumalo_id'] = $this->sua_id;
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
        $nuu['motu_id'] = $this->motu_id;
        $nuu['itumalo_id'] = $this->launiusaelua_id;
        $nuu['name'] = 'Aua';
        $nuu['content'][] = ["Aua" => ["Afio mai le Sa'ousoali'i (Unutoa)",
            "Afio mai le Matua o Liufau o le Tama a Aitu ma Tagata",
            "Susu mai le faleono (Uli, Niumatalolo, Ponausuia, Saoimanulua, Tilo, Afu)",
            "Mamalu mai le fetalaiga ia Paopaoailua ma Tufaga me le launiusaelua"]];
        $nuu['content'][] = ["Malaefono" => ["Paepaeulupo'o", "Paepae alå"]];
        return $nuu;
    }

    function getLeloaloa() {

        $nuu = [];
        $nuu['id'] = $this->launiusaelua_id + 2;
        $nuu['motu_id'] = $this->motu_id;
        $nuu['itumalo_id'] = $this->launiusaelua_id;
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
        $nuu['motu_id'] = $this->motu_id;
        $nuu['itumalo_id'] = $this->launiusaelua_id;
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
        $nuu['motu_id'] = $this->motu_id;
        $nuu['itumalo_id'] = $this->launiusaelua_id;
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
        $nuu['motu_id'] = $this->motu_id;
        $nuu['itumalo_id'] = $this->launiusaelua_id;
        $nuu['name'] = 'Fagaalu';
        $nuu['content'][] = ["Fagaalu" => ["Afio mai le Afioga i Ma'opu (Fano, Amituana'i)",
            "Susu mai le Nofo Fanau (Naisoa)",
            "Maliu mai le Launiusaelua (Usoagalelei ma Faatiliga)",
            "Ma le Lauti na Laulelei"]];
        $nuu['content'][] = ["Malaefono" => ["Vaovai"]];
        return $nuu;
    }
}
