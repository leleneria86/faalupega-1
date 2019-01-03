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
    protected $motu_id = 3000;
    protected $faasaleleaga_id = 3100;
    protected $salega_id = 3200;
    protected $gagaifomauga_id = 3300;
    protected $palauli_id = 3400;
    protected $vaisigano_id = 3500;
    protected $pitonuus = [];

    function getItumalo()
    {
        $data = [
            ["id"=>$this->faasaleleaga_id, "name"=>"Fa'asalele'aga","motu_id"=>$this->motu_id, "content"=>["Fa'alupega o Fa'asalele"]],
            ["id"=>$this->salega_id, "name"=>"Salega","motu_id"=>$this->motu_id, "content"=>["Afifio mai tupu o le Itu",
                                                                                            "Maliu mai lau fetalaiga Tuisalega, le na ali'ita'i i le Itu", 
                                                                                             "faapea foi Tootoo o le Itu"]],
            ["id"=>$this->gagaifomauga_id, "name"=>"Gagaifomauga","motu_id"=>$this->motu_id, "content"=>[
                "Afio mai le alii o le Itu, ma tupu o le Itu",
                "Maliu mai Tootoo Finao, ma le Gagaifomauga"]],
            ["id"=>$this->palauli_id, "name"=>"Palauli","motu_id"=>$this->motu_id, "content"=>[
                                                                                              "Afifio mai Faasisina ma Sa Lilomaiava",
                                                                                              "Afifio mai Tapa'au o le Itu",
                                                                                              "Mamalu mai To'oto'o o Vailoa, ma le faleupolu o tofiga",
                                                                                              "Alalata'i le pule ia te oe Palauli"]],
            ["id"=>$this->vaisigano_id, "name"=>"Vaisigano (Asau)","motu_id"=>$this->motu_id, "content"=>[
                                                                                              "Afifio mai le paia o Aiga ma Tapa'au o le Itu",
                                                                                              "Alala mai To'oto'o o Mati'a ma Ti'atu'au",
                                                                                              "Mamalu mai oe Salafai ma Faleupolu o tofiga",
                                                                                              "Maliu mai oe le Tapuaiga"]]

        ];
        return $data;
    }

    function getNuus() {

        $faasaleleaga = $this->getFaasaleleaga();
        $palauli = $this->getPalauli();
        $vaisigano = $this->getVaisigano();
        $salega = $this->getSalega();
        $gagaifomauga = $this->getGagaifomauga();
        return array_merge($faasaleleaga, $palauli, $vaisigano, $salega, $gagaifomauga);
    }

    function getPitonuus() {

        return $this->pitonuus;
    }
    
    function getGagaifomauga()
    {
        $ret = [];
        $ret[] = $this->getManase();
        $ret[] = $this->getSafotu();
        $ret[] = $this->getPaiaSamauga();
        $ret[] = $this->getPaia();
        $ret[] = $this->getSamauga();
        $ret[] = $this->getLefagaoalii();
        $ret[] = $this->getSiufaga2();
        $ret[] = $this->getLolua();
        $ret[] = $this->getAsu();
        $ret[] = $this->getFaleupolu();
        $ret[] = $this->getMatavai();
        $ret[] = $this->getFatuvalu();
        $ret[] = $this->getFaletagaloa();
        $ret[] = $this->getSasinaFagaee();
        $ret[] = $this->getAopo();
        return $ret;
    }
    
    function getManase() {

        $content = [];
        $content['id'] = $id = $this->gagaifomauga_id + 1;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->gagaifomauga_id;
        $content['name'] = "Manase";
        $content['content'][] = ["Manase" => [
            "Susu mai Taito ma ona alo",
            "Susu mai le aiga Saumalau",
            "Maliu mai Tauāsā ma le lautinalaulelei i le Faleupolu"]];
        $content['content'][] = ["Malaefono" => ["Finao"]];
        return $content;
    }
    
    function getSafotu() {

        $content = [];
        $content['id'] = $id = $this->gagaifomauga_id + 2;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->gagaifomauga_id;
        $content['name'] = "Safotu";
        $content['content'][] = ["Safotu" => [
            "Afio mai sa'o e fa",
            "Afio mai Afitu, ma le aiga sa Afitu",
            "Afio mai Tapusoa o le matua o le aiga Salele'aalii",
            "Afio mai lau afioga Utumapu ma lou Usoalii",
            "Maliu mai lau tofa a le tulafale ma ou aiga (Timu, U'uga)",
            "Susu mai le Lilomaiava ma vae o le Nofoafia",
            "Maliu mai lau tofa Lavea, o le alii o le Itu, na e mua i malae"]];
        $content['content'][] = ["Faapuupuuga" => [
            "Afio mai sa'o e fa",
            "Susu mai le aiga Saumalau",
            "Maliu mai le Pouniu ma le Faasau",
            "Maliu mai lau tofa a le tulafale"]];
        $content['content'][] = ["Malaefono" => ["Finao"]];
        return $content;
    }
    
    function getPaiaSamauga() {

        $content = [];
        $content['id'] = $id = $this->gagaifomauga_id + 3;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->gagaifomauga_id;
        $content['name'] = "Paia, Samuga, Lefagaoalii";
        $content['content'][] = ["Tuufatasiga o Paia, Samauga, Lefagaoalii" => [
            "Afio mai le aiga o sa Peseta",
            "Afio mai Sa'o",
            "Maliu mai le mamalu o le falefa o Samauga"]];
        $content['content'][] = ["Malaefono" => ["Malo'autasi - Malaefono o Sa'o"]];
        return $content;
    }
    
    function getPaia() {

        $content = [];
        $content['id'] = $id = $this->gagaifomauga_id + 4;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->gagaifomauga_id;
        $content['name'] = "Paia";
        $content['content'][] = ["Paia" => [
            "Afio mai le aiga sa Peseta",
            "Afio mai le Toafia o alii",
            "Susu foi Faalogoū, o le foetuese",
            "Maliu mai Mausautele, ma lau fetalaiga Maua'i",
            "Maliu mai foi le Atu Tui Savaii"]];
        $content['content'][] = ["Malaefono" => ["Maiaesā"]];
        return $content;
    }
    
    function getSamauga() {

        $content = [];
        $content['id'] = $id = $this->gagaifomauga_id + 5;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->gagaifomauga_id;
        $content['name'] = "Samauga";
        $content['content'][] = ["Samauga" => [
            "Afio mai le aiga Sa Peseta",
            "Maliu mai Sooalo ma le tamatane",
            "Maliu mai lau fetalaiga Laupu'e ma upu ia Samauga"]];
        return $content;
    }
    
    function getLefagaoalii() {

        $content = [];
        $content['id'] = $id = $this->gagaifomauga_id + 6;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->gagaifomauga_id;
        $content['name'] = "Lefagaoalii";
        $content['content'][] = ["Lefagaoalii" => [
            "Afio mai Tuu o le nofomatua ma lou faleagafulu ma le Falelima o alo o Na'i",
            "Afio mai Fuimaono ma le Usoalii",
            "Afio mai Malaitai ma le Usoalii ma le faletolu",
            "Afio mai Tuailemafua ma Tamapaa ma le Usoalii",
            "Maliu mai oe Samauga"]];
        return $content;
    }
    
    function getSiufaga2() {
        $content = [];
        $content['id'] = $id = $this->gagaifomauga_id + 7;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->gagaifomauga_id;
        $content['name'] = "Si'ufaga";
        $content['content'][] = ["Si'ufaga" => [
            "Afio mai Tuu o le nofo matua ma lou faleagafulu",
            "Afio mai le Falelima o alo o Na'i",
            "Afio mai le Suafa o Fuimaono ma le Matua (Alai, Aitauia)",
            "Afio mai le Usoalii (Vaiouga, Tumanuvao)",
            "E faapea le mamalu o le aiga o Siufagā"]];
        return $content;
    }
    
    function getLolua() {

        $content = [];
        $content['id'] = $id = $this->gagaifomauga_id + 8;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->gagaifomauga_id;
        $content['name'] = "Lolua";
        $content['content'][] = ["Lolua" => [
            "Afio mai Malaitai",
            "Afio mai le Usoalii (Va'ele, Lemana)",
            "E faapea upu i le faletolu (Tauti, Sifuiva, Taala, Lafai, Vaaiiva, Lesoa)"]];
        return $content;
    }
    
    function getAsu() {

        $content = [];
        $content['id'] = $id = $this->gagaifomauga_id + 9;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->gagaifomauga_id;
        $content['name'] = "Asu";
        $content['content'][] = ["Asu" => [
            "Susu mai Tauilemafua",
            "Susu mai le Usoalii (Feo, Ufagalilo, Savaii, Uilaau, Matalavea)",
            "ma upu i Tamapaa (Taa'au Leota, Pesefea, Tagaloa, Amituanai Pepe ma Pula)",
            "ma lo outou aiga i Asu"]];
        return $content;
    }
    
    function getFaleupolu() {

        $content = [];
        $content['id'] = $id = $this->gagaifomauga_id + 10;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->gagaifomauga_id;
        $content['name'] = "Faleupolu";
        $content['content'][] = ["Faleupolu" => [
            "Maliu mai lau tofa Pagamalie",
            "Maliu mai lo outou Itualasa",
            "E faapea lo outou faleupolu Samauga"]];
        return $content;
    }
    
    function getMatavai() {

        $content = [];
        $content['id'] = $id = $this->gagaifomauga_id + 11;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->gagaifomauga_id;
        $content['name'] = "Matavai (Safune)";
        $content['content'][] = ["Matavai (Safune)" => [
            "Afio mai le Toafa o Alii",
            "Faapea sa Toe'eti",
            "Maliu mai lau fetalaiga Tuumatavai ma Safune"]];
        return $content;
    }
    
    function getFatuvalu() {

        $content = [];
        $content['id'] = $id = $this->gagaifomauga_id + 12;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->gagaifomauga_id;
        $content['name'] = "Fatuvalu";
        $content['content'][] = ["Fatuvalu" => [
            "Afio mai Tapaau",
            "Maliu mai le falefa o Sausi ma Safune"]];
        return $content;
    }
    
    function getFaletagaloa() {

        $content = [];
        $content['id'] = $id = $this->gagaifomauga_id + 13;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->gagaifomauga_id;
        $content['name'] = "Faletagaloa";
        $content['content'][] = ["Faletagaloa" => [
            "Susu mai le Tagaloasusū (Pāpā)",
            "Afio mai le Alii o le Nuu (Leota)",
            "Afio mai Iliganoa (Taupou)",
            "Maliu mai lo outou Toafia o Taulauniu",
            "Faapea Saoloapu ma Safune"]];
        return $content;
    }
    
    function getSasinaFagaee() {

        $content = [];
        $content['id'] = $id = $this->gagaifomauga_id + 14;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->gagaifomauga_id;
        $content['name'] = "Sasina, Fagae'e, Letui";
        $content['content'][] = ["Sasina, Fagae'e, Letui" => [
            "Afio mai aiga e lua (Sa Tupua, Sa Malietoa)",
            "Maliu ai oe le faletolu"]];
        
        $content['pitonuus'][] = $this->getSasina($id);
        $content['pitonuus'][] = $this->getFagaee($id);
        $content['pitonuus'][] = $this->getLetui($id);
        return $content;
    }
    
    function getSasina($id) {

        $content = [];
        $content['id'] = $id + 1;
        $content['motu_id'] = $id;
        $content['itumalo_id'] = $this->gagaifomauga_id;
        $content['name'] = "Sasina";
        $content['content'][] = ["Sasina" => 
            ["Afio mai le toatolu o Suafa (Leasi, Vagana, Togoiu)",
            "Afio mai e na fa'asa'osa'o (Togoiu, Vagana)",
            "Afio mai le matua, o Leasi ma le aiga Sa Leasi faapea lo latou vaafetalai",
            "Susu mai Laauli",
            "Afio mai Usoalii o Suafa",
            "Maliu mai lo outou falelua o Saletolo ma Sa Lealiifano",
            "o le mamalu lava lea o le faletolu"]];
        $content['content'][] = ["Malaefono" => ["Malaefilogia"]];
        return $content;
    }
    
    function getFagaee($id) {

        $content = [];
        $content['id'] = $id + 2;
        $content['motu_id'] = $id;
        $content['itumalo_id'] = $this->gagaifomauga_id;
        $content['name'] = "Fagae'e";
        $content['content'][] = ["Fagae'e" => 
            ["Afio mai le Sa'o (Polataivao)",
            "Afio mai le aiga Sa Igoā",
            "Maliu mai Saitupua ma lau fetalaiga Nuu"]];
        $content['content'][] = ["Malaefono" => ["Malaetele"]];
        return $content;
    }
    
    function getLetui($id) {

        $content = [];
        $content['id'] = $id + 3;
        $content['motu_id'] = $id;
        $content['itumalo_id'] = $this->gagaifomauga_id;
        $content['name'] = "Letui";
        $content['content'][] = ["Letui" => 
            ["Afio mai le Aiga o Mavaega",
            "Maliu mai le Fatua ma le Falelupe",
            "Maliu mai lau fetalaiga Fiu"]];
        $content['content'][] = ["Malaefono" => ["Puna'oa"]];
        return $content;
    }
    
    function getAopo() {

        $content = [];
        $content['id'] = $id = $this->gagaifomauga_id + 15;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->gagaifomauga_id;
        $content['name'] = "A'opo";
        $content['content'][] = ["A'opo" => [
            "Susu mai Eetau ma le Ati Eetau",
            "Afio mai Tauaanae ma Matofai",
            "Susu mai lou Tapaau le Tagaloa A'opo",
            "Afio mai le aiga o Mavaega",
            "Maliu le Falelima o Sa Eseese o le Faleselau",
            "Maliu mai foi lau fetalaiga Pa'õ"]];
        $content['content'][] = ["Malaefono" => ["Maota"]];
        return $content;
    }
    
    function getSalega()
    {
        $ret = [];
        $ret[] = $this->getSiuvao();
        $ret[] = $this->getFagafau();
        $ret[] = $this->getSamata();
        $ret[] = $this->getFogatuli();
        $ret[] = $this->getFaiaai();
        $ret[] = $this->getVaipua();
        $ret[] = $this->getFogasavaii();
        $ret[] = $this->getSagone();
        $ret[] = $this->getSatupaitea();
        return $ret;
    }
    
    function getSatupaitea() {

        $content = [];
        $content['id'] = $id = $this->salega_id + 9;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->salega_id;
        $content['name'] = "Satupa'itea";
        $content['content'][] = ["Satupa'itea - Aoao tetele o le Itumalo" => [
            "Susu mai le va'a-I-malae, ma le va'a-I-ti ma Tapaau na e tausi",
            "Susu mai tupu o le Itu, ma lau fetalaiga Tuisalega",
            "Maliu mai To'oto'o Faletoi",
            "Alalata'i mai le Alataua, ma upu ia te oe le pule"]];
        $content['content'][] = ["Aotelega o Satupa'itea" => [
            "Susu mai Asiata, oe na falefa i ai Tumua o le vaa I malae",
            "Susu mai Tupa'i, o le vaa I ti",
            "Susu mai le aiga Samoeleoi (Tavui, Gasu (Gasū)",
            "Afio mai alo o Lilomaiava (Tuimaseve, Faanana (Faanānā))",
            "Afio mai Fauatea ma le aiga sa Valomua",
            "Afio mai lou Tapa'au o le Tonumaipe'a",
            "Maliu mai le mamalu o le nofo a ituaiga ia te oe le Alataua",
            "Tapa'au le fano, Nofoapule, ma le Matuafia"]];
        
        $content['pitonuus'][] = $this->getVaega($id);
        $content['pitonuus'][] = $this->getPitonuu($id);
        return $content;
    }
    
    function getVaega($id) {

        $content = [];
        $content['id'] = $id +1;
        $content['motu_id'] = $id;
        $content['itumalo_id'] = $this->salega_id;
        $content['name'] = "Vaega";
        $content['content'][] = ["Vaega" => 
            ["Susu mai le paia i le nofo fealoa'i ia Sa Asiata (Asiatā)",
            "lau tofa le vaa i malae le na tausi vaa tele",
            "Susu mai le vaa i ti",
            "Susu mai le suafa Fauatea ma le aiga sa Valomua",
            "Maliu mai le Nofoa a pule, ia te oe le Alataua"]];
        return $content;
    }
    
    function getPitonuu($id) {

        $content = [];
        $content['id'] = $id 21;
        $content['motu_id'] = $id;
        $content['itumalo_id'] = $this->salega_id;
        $content['name'] = "Pitonuu (Pitonuū)";
        $content['content'][] = ["Pitonuu (Pitonuū)" => 
            ["Susu mai le aiga Sa Moeleoi (Tavui, Gasu (Gasū))",
            "Afio mai le alo o Lilomaiava",
            "Afio mai Tapa'au",
            "Afio mai oe le Tapaaulefano"]];
        return $content;
    }
    
    function getSiuvao() {

        $content = [];
        $content['id'] = $id = $this->salega_id + 1;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->salega_id;
        $content['name'] = "Si'uvao";
        $content['content'][] = ["Si'uvao" => ["Susu mai Pesefea ma le susuga ia Tilimafana",
            "Maliu mai sa Soā ma Sama'i"]];
        $content['content'][] = ["Malaefono" => ["Olotuuga"]];
        return $content;
    }
    
    function getFagafau() {

        $content = [];
        $content['id'] = $id = $this->salega_id + 2;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->salega_id;
        $content['name'] = "Fagafau";
        $content['content'][] = ["Fagafau" => [
            "Susu mai alo o Lilomaiava (Seve, Faga) ma le la tamafanau o Sa'u",
            "Afio mai Tuimaugapo ma le aiga",
            "Maliu mai Sa Soā ma le falefa o Sama'i"]];
        $content['content'][] = ["Malaefono" => ["Tapapa ma Matailiili"]];
        return $content;
    }
    
    function getSamata() {

        $content = [];
        $content['id'] = $id = $this->salega_id + 3;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->salega_id;
        $content['name'] = "Samata";
        $content['content'][] = ["Samata" => [
            "Afio mai lau afioga a le Sa'o",
            "Afio mai le Taufia a Malietoa Taulapapa",
            "Maliu mai le mamalu ia sa Leutogi"]];
        $content['content'][] = ["Samata I Tai" => [
            "Afio mai lau afioga a le Sa'o (Toomata)",
            "Afio mai le Toafa o alii (Mase, Togagae, Aloi, Saveasoi) ma le matua o Mase",
            "Afio mai Toleafoa ma Amituanai",
            "Afio mai le Aloalii (Galumalemana)",
            "Maliu mai Sa Leutogi"]];
        $content['content'][] = ["Malaefono" => ["Iliili"]];
        $content['content'][] = ["Samata I Uta" => [
            "Afio mai le toatolu o alii (Pupumai, Fasavalu, Togaga'e)",
            "Maliu mai sa Leutogi ma le nofo i Ituaiga"]];
        $content['content'][] = ["Malaefono" => ["Malefia"]];
        return $content;
    }
    
    function getFogatuli() {

        $content = [];
        $content['id'] = $id = $this->salega_id + 4;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->salega_id;
        $content['name'] = "Fogatuli";
        $content['content'][] = ["Fogatuli" => [
            "Afio mai lau afioga Afualo ma alo (Taala, Leone)",
            "Maliu mai lau fetalaiga Fa'imanu, o le fofoga o Usoalii (Faafeagai, Laulu)",
            "Maliu mai le lauti na laulelei ia te oe le Alataua"]];
        $content['content'][] = ["Malaefono" => ["Malae o le Ma"]];
        $content['content'][] = ["Tuufatasiga o Fai'a'ai ma Fogatuli" => [
            "Afio mai Fualau ma le agia alii",
            "Afio mai Fepuleai",
            "Afio mai Usoalii Taufeagai",
            "Maliu mai Tuisalega ma le fofoga o Usoalii ma le Alataua"]];
        return $content;
    }
    
    function getFaiaai() {

        $content = [];
        $content['id'] = $id = $this->salega_id + 5;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->salega_id;
        $content['name'] = "Fai'a'ai";
        $content['content'][] = ["Fai'a'ai" => [
            "Afio mai Fualau ma le aiaga alii (Levu, Gaia)",
            "Afio mai lau afioga Fepuleai",
            "Afio mai lau afioga Tilafono ma le Faavaoga (Su'a, Gisa)",
            "Maliu mai lau fetalaiga Tuisalega",
            "Na alii oe i lou Itu ma pule i lou Itu ona lou pito fanua",
            "Maliu mai oe le Alataua"]];
        $content['content'][] = ["Malaefono" => ["Malae o le Ma"]];
        $content['content'][] = ["Tuufatasiga o Fai'a'ai ma Fogatuli" => [
            "Afio mai Fualau ma le agia alii",
            "Afio mai Fepuleai",
            "Afio mai Usoalii Taufeagai",
            "Maliu mai Tuisalega ma le fofoga o Usoalii ma le Alataua"]];
        return $content;
    }
    
    function getVaipua() {

        $content = [];
        $content['id'] = $id = $this->salega_id + 6;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->salega_id;
        $content['name'] = "Vaipu'a";
        $content['content'][] = ["Vaipu'a" => [
            "Susu mai Samoeileoi (Loli) ma aiga (Mafuatu, Gasū, Mataioaopo)",
            "Susu mai alala Maota (Mae'e, Maunuileatua",
            "Maliu mai sa Utuvai ma upu i le Alataua"]];
        $content['content'][] = ["Malaefono" => ["Siumalae","Vaipu'a"]];
        return $content;
    }
    
    function getFogasavaii() {

        $content = [];
        $content['id'] = $id = $this->salega_id + 7;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->salega_id;
        $content['name'] = "Fogasavaii";
        $content['content'][] = ["Fogasavaii" => [
            "Afio mai Matautia ma le toafa (Togafau, Fepuleai, Alosamoa, Fonoti)",
            "Susu mai le matua o Mooui",
            "Afio mai le Ma'opu o Itutu ma Vaoga",
            "Maliu mai le fuaiala o Sanu'ū o Sela ma 'Olo",
            "Maliu mai le taupolo alii"]];
        $content['content'][] = ["Malaefono" => ["Maota o Tumua"]];
        return $content;
    }
    
    function getSagone() {

        $content = [];
        $content['id'] = $id = $this->salega_id + 8;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->salega_id;
        $content['name'] = "Sagone";
        $content['content'][] = ["Sagone" => [
            "Afio mai le aiga Samoeileoi (Tapuai)",
            "Afio mai sa Lilomaiava (Leilua)",
            "Afio mai Ma'opu (Leaupepe, Laiataua)",
            "Susu mai le matua o Mailata ma le suafa o Luagalau",
            "Maliu mai le falesefulu o le Atitogia ma upu i le Alataua"]];
        $content['content'][] = ["Malaefono" => ["Fetoloa'i","Vaimoliai"]];
        return $content;
    }
    
    function getVaisigano()
    {
        $ret = [];
        $ret[] = $this->getAsau();
        $ret[] = $this->getVaisalaMaAuala();
        $ret[] = $this->getFagasa();
        $ret[] = $this->getSataua();
        $ret[] = $this->getPapa();
        $ret[] = $this->getFalealupo();
        $ret[] = $this->getNeiafu();
        $ret[] = $this->getFalelima();
        return $ret;
    }
    
    function getAsau() {

        $content = [];
        $content['id'] = $id = $this->vaisigano_id + 1;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->vaisigano_id;
        $content['name'] = "Asau";
        $content['content'][] = ["Faapuupuuga o Asau" => ["Afio mai Aiga", "Maliu mai Salafai ma oe le Pule"]];
        $content['content'][] = ["Asau" => ["Susu maia ma afio mai aiga (Tufuga, Masoe)",
            "Afio mai le falefa o Usoalii",
            "Afio mai le Ma'opu i lau afioga Tupua, ma le aumaga ma le aiga Sa Taneavae",
            "Afio mai Sa Lilomaiava",
            "Susu mai Samoeleoi",
            "Afio mai le agia o Mavaega",
            "Maliu mai Salafai i ituala na lua, o le Falefia ma le Si'u o le Fanua, ma le falesefulumalelua o le atiatipa o Salafai na faigā ma upu ia te oe le pule"]];
        $content['content'][] = ["Malaefono" => ["Tiatuau (Tufuga), Mati'a (Masoe)"]];
        return $content;
    }
    
    function getVaisalaMaAuala() {

        $content = [];
        $content['id'] = $id = $this->vaisigano_id + 2;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->vaisigano_id;
        $content['name'] = "Vaisala ma Auala";
        $content['content'][] = ["Vaisala ma Auala" => ["Afio mai lau afioga a le Tapa'au (Toomata)",
            "Susu mai le gafa (Vaepule)",
            "Afio mai le afioga i le Aloalii (Vaai)",
            "Susu mai Tapu ma le Atimanutai",
            "Maliu mai Taulauniu (Gale, Tuiasau)",
            "Maliu mai sa Oloapu ma upu ia te oe Safune"]];
        $content['content'][] = ["Malaefono" => ["Faletagaloa"]];
        $content['content'][] = ["Vaisala" => ["Afio mai lau afioga a le Tapa'au (Toomata)",
            "Susu mai le gafa",
            "Afio mai le Aloalii",
            "Maliu mai Taulauniu",
            "Maliu mai sa Oloapu"]];
        $content['content'][] = ["Auala" => ["Afio mai Tapu ma le Atimanutai",
            "Maliu mai le toalima ma upu ia te oe Safune"]];
        return $content;
    }
    
    function getFagasa() {

        $content = [];
        $content['id'] = $id = $this->vaisigano_id + 3;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->vaisigano_id;
        $content['name'] = "Fagasa";
        $content['content'][] = ["Fagasa" => ["Afifio mai Ufanalilo ma Luapitofanua",
            "Afio mai le maopu (Toleafoa)",
            "Susu mai le Tagaloa",
            "Maliu mai Utuutu ma Faitau",
            "Maliu mai le fetalaiga ia Aumua ma Maninoa"]];
        $content['content'][] = ["Malaefono" => ["Faupapa (Faupāpā)"]];
        return $content;
    }
    
    function getSataua() {

        $content = [];
        $content['id'] = $id = $this->vaisigano_id + 4;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->vaisigano_id;
        $content['name'] = "Sataua";
        $content['content'][] = ["Sataua" => ["Afio mai le aiga o Mavaega",
            "Afio mai Matautia ma Lesatele",
            "Afio mai Tupua ma le aumaga",
            "Afio mai le aiga o sa Taneavae ma lau afioga i le Aifaaoga (Valasi)",
            "Maliu mai le falefa o Taua, ma lau fetalaiga Lealuga (Tauia, Vaoliko, Tagaloa, Malagamaalii"]];
        $content['content'][] = ["Malaefono" => ["Faupapa (Faupāpā)"]];
        $content['content'][] = ["Aotelega o Sataua" => ["Afio maia aiga",
            "Maliu mai le falefa o Taua",
            "Maliu mai lau fetalaiga Lealuga"]];
        return $content;
    }
    
    function getPapa() {

        $content = [];
        $content['id'] = $id = $this->vaisigano_id + 5;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->vaisigano_id;
        $content['name'] = "Papa";
        $content['content'][] = ["Papa" => ["Susu mai Su'a ma le Faavaoga",
            "Afio mai Ili ma Vaitoe",
            "Afio mai oe le matua (Tapusoa)",
            "Maliu mai Sataua ma lau fetalaiga Lealuga"]];
        $content['content'][] = ["Malaefono" => ["Faupapa (Faupāpā)"]];
        return $content;
    }
    
    function getFalealupo() {

        $content = [];
        $content['id'] = $id = $this->vaisigano_id + 6;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->vaisigano_id;
        $content['name'] = "Falealupo";
        
        $content['content'][] = ["Faapuupuuga o Falealupo" => ["Afio mai Auvaa ma Usoalii",
            "Afio mai le Ma'opu ma le matua",
            "Maliu mai le falefa o le Tapuaiga ma lau fetalaiga Silioulaei ma le lauti na laulelei"]];
        
        $content['content'][] = ["Falealupo" => ["Afio mai Auvaa o oe o le tupu faanofonofo",
            "Afio mai alo o Sina i lo outou aiga o sa Seumanutafa",
            "Susu mai le Gafa (Aeau, Ugapo, Faletagoai (O sa Amituanai lava lea))",
            "Afio mai Ma'opu o Nafanua (Solia, Foaimea",
            "Afio mai lau afioga a le matua (Lamositele)",
            "Maliu mai le falefa o le Tapuaiga (Fuiono, Taofinuu, Soifua ma lau fetalaiga Silioulaei",
            "Maliu mai le lauti na laulelei"]];
        $content['content'][] = ["Malaefono" => ["Fili ma Puletuu na to ai manū", "Titiuatoa", "Tapusita"]];
        return $content;
    }
                                 
    function getNeiafu() {

        $content = [];
        $content['id'] = $id = $this->vaisigano_id + 7;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->vaisigano_id;
        $content['name'] = "Neiafu";
        $content['content'][] = ["Neiafu" => ["Afio mai le Tapaau o le Alataua i lau afioga a le Tonumaipea",
            "Afio mai le Taauso ma lo outou matua o Nonumalo (Peseta, Aiolupotea)",
            "Susu mai le matua o Tauiliili ma le na Aifaaoga (Aliimalemanu)",
            "Susu mai le toafa o suafa (Pei, Safiu, Aunei, Lafaitele)",
            "Maliu mai Tapaaulefano (Taatiti, Tuaiaufai)",
            "Maliu mai le Fale'auga ma Nofoapule faapea oe le Alataua"]];
        $content['content'][] = ["Malaefono" => ["Lepua ma Aliipoutasi (Neiafu)", "Falemoa (Alataua atoa)"]];
        return $content;
    }
                                 
    function getFalelima() {

        $content = [];
        $content['id'] = $id = $this->vaisigano_id + 8;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->vaisigano_id;
        $content['name'] = "Falelima";
        $content['content'][] = ["Falelima" => ["Afio mai le Taauso (Gisa, Tuifaiga, Nonumalo, Aiolupotea, Lolomatauama, Aloivaopili, Toleafoa",
            "Afio mai le Tonumaipea ma le Tafa'i (Folasa)",
            "Afio mai alo o Tamalelagi (Tuioti)",
            "Afio mai le maopu o Tuiaana (Fuiavailiili)",
            "Susu mai le gafa (Seiuli)",
            "Afio mai Tanuvasamanaia ma lou falefia",
            "Susu mai Alalamatuatala (Taituave, Tanuvasa) ma le maopu (Aiono)",
            "Afio mai le Toalepaialii",
            "Maliu mai le fofoga o pāpā i lau fetalaiga Folasa",
            "Alala maia Tamafaiga ma upu ia te oe le Alataua"]];
        $content['content'][] = ["Malaefono" => ["Si'uasave"]];
        return $content;
    }

    function getPalauli()
    {
        $ret = [];
        $ret[] = $this->getPalauliISisifo();
        $ret[] = $this->getPalauliLeFalefa();
        $ret[] = $this->getAotelegaOPalauli();
        return $ret;
    }
    
    function getAotelegaOPalauli() {

        $content = [];
        $content['id'] = $id = $this->palauli_id + 3;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->palauli_id;
        $content['name'] = "Aotelega o Palauli";
        $content['content'][] = ["Aotelega o Palauli" => ["Afio Faasisina ma sa Lilomaiava",
            "Alalata'i sa faleletaua na potopoto",
            "Palauli ma lou itu, ma oe le pule"]];
        $content['content'][] = ["Malaefono" => ["Vailoa"]];

        $content['pitonuus'][] = $this->getVailoa($id);
        $content['pitonuus'][] = $this->getVaitoomuli($id);
        $content['pitonuus'][] = $this->getFaala($id);
        return $content;
    }
    
    function getVailoa($id) {

        $content = [];
        $content['id'] = $id +1;
        $content['motu_id'] = $id;
        $content['itumalo_id'] = $this->palauli_id;
        $content['name'] = "Vailoa";
        $content['content'][] = ["Vailoa" => 
            ["Afio le faasisina ma le aloalii (Leleisiuao ma Tualaulelei)",
            "Afio le fofoga o sa Lilomaiava (Salu)",
            "Maliu mai sa o le taulua (Mataafa ma Autagavaia)",
            "Maliu mai Toluono ma le aiga a le falelima",
            "Alalata'i le nofoalii ma le matua (Ma'i ma Latu)",
            "Ma upu i le Faleao"]];
        return $content;
    }
    
    function getVaitoomuli($id) {

        $content = [];
        $content['id'] = $id + 2;
        $content['motu_id'] = $id;
        $content['itumalo_id'] = $this->palauli_id;
        $content['name'] = "Vaitoomuli";
        $content['content'][] = ["Vaitoomuli" => 
            ["Afio lo outou aiga Sa Leituala ma la outou tama (Tupua)",
            "Susu lau susuga i le faasisina ma Leavaiseeta",
            "Afio lau afioga le aloalii o Lilomaiava (Momoisea)",
            "Afio mai lau afioga Vaovasa",
            "Mamalu mai fetalaiga ia te oulua tulafalealii (Fiso, Seumanufagai) ma le faleupolu"]];
        return $content;
    }
    
    function getFaala($id) {

        $content = [];
        $content['id'] = $id + 3;
        $content['motu_id'] = $id;
        $content['itumalo_id'] = $this->palauli_id;
        $content['name'] = "Faala";
        $content['content'][] = ["Faala" => 
            ["Afio mai lau afioga le alo o Lilomaiava (Iaulualo)",
            "Susu mai suafa (Sa Laulu) ma lo outou matua o Tauvao, faapea foi Fuiava ma le aloalii (Afoa)",
            "Mamalu maia lau fetalaiga Lagaaia o le sa'o fetalai, ma lo outou aiga Sa Lagaaia",
            "Alala maia outlua le uso taua (Tui, Tapusoa)",
            "Ma lau tofa Manusina ma lo outou tulafale"]];
        return $content;
    }

    function getPalauliISisifo() {

        $content = [];
        $content['id'] = $id = $this->palauli_id + 1;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->palauli_id;
        $content['name'] = "Palauli I Sisifo";
        $content['content'][] = ["Palauli I Sisifo" => ["Afio mai le pa'ia o Aiga",
            "Maliu mai Gaga'emalae",
            "Ma upu ia te oe Salemuli'aga"]];

        $content['pitonuus'][] = $this->getFoailalo($id);
        $content['pitonuus'][] = $this->getFoailuga($id);
        $content['pitonuus'][] = $this->getSatuiatua($id);
        $content['pitonuus'][] = $this->getSalailua($id);
        $content['pitonuus'][] = $this->getSiutu($id);
        $content['pitonuus'][] = $this->getTaga($id);
        return $content;
    }

    function getFoailalo($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 1;
        $content['itumalo_id'] = $this->palauli_id;
        $content['name'] = "Foailalo";
        $content['content'][] = ["Foailalo" => ["Afio mai Letele ma Leaupepe",
            "Afio mai alo o Lilomaiava",
            "Maliu mai le falelua"]];
        $content['content'][] = ["Malaefono" => ["Muāvā", "Teevao"]];
        return $content;
    }

    function getFoailuga($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 2;
        $content['itumalo_id'] = $this->palauli_id;
        $content['name'] = "Foailuga";
        $content['content'][] = ["Foailuga" => ["Afio mai le matua o Tauavamea",
            "Afifio mai le uso (Leilua, Faliuga)",
            "Itualamavae ma le tame a le fale",
            "Maliu mai le nofo a ituaiga i le Ailoaa"]];
        $content['content'][] = ["Malaefono" => ["Fa'alautaume"]];
        return $content;
    }
    
    function getSatuiatua($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 3;
        $content['itumalo_id'] = $this->palauli_id;
        $content['name'] = "Satuiatua";
        $content['content'][] = ["Satuiatua" => ["Afio mai lau afioga i le Sa'o (Fa'atupuinati)",
            "Afio mai Tu'uauato ma le falesefulu o Pesefeamanaia",
            "Afio mai alo o Lilomaiava ma le nofo a Usoali'i",
            "Maliu mai ia na ta'i ma upu ia Gaga'emalae"]];
        $content['content'][] = ["Malaefono" => ["Falemaii", "Fogatia"]];
        return $content;
    }
    
    function getSalailua($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 4;
        $content['itumalo_id'] = $this->palauli_id;
        $content['name'] = "Salailua";
        $content['content'][] = ["Salailua" => ["Afio mai Lealaitafea ma alo o Sina",
            "Afio mai le aiga o Sa Amituanai ma le Savaiinaea",
            "Susu mai Leuluaialii ma alii o Vaipaepae",
            "Maliu mai i la'ua matua o Tuato ma Tolovaa ma le igoa o Salemuliaga o le Faleupolu o Tofiga"]];
        $content['content'][] = ["Malaefono" => ["Vaipaepae", "Oloitefu", "Mutiatele"]];
        return $content;
    }
    
    function getSiutu($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 5;
        $content['itumalo_id'] = $this->palauli_id;
        $content['name'] = "Siutu";
        $content['content'][] = ["Siutu" => ["Afio mai sa Laulū (Mulipola)",
            "Susu mai suafa (Aumalesulu ma Leota)",
            "Maliu mai lau fetalaiga Faatoafe ma le nuu faigata"]];
        $content['content'][] = ["Malaefono" => ["Nuuuli"]];
        return $content;
    }
    
    function getTaga($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 6;
        $content['itumalo_id'] = $this->palauli_id;
        $content['name'] = "Taga";
        $content['content'][] = ["Faapuupuuga o Taga" => ["Afio mai le aiga paia o Salevalasi",
            "Maliu mai lau tautalaga Faiumu",
            "Maliu mai le falefa, ma le faigata, ma le mamalu ia Salemuliaga"]];
        $content['content'][] = ["Auiliiliga o Taga" => ["Afio mai lau afioga a le matua (Toilolo)",
            "Afio mai lau afioga a le sa'o (Afoa)",
            "Susu mai Taulapapa",
            "Afio mai le fanaualii (Notoa ma Vaimalu)",
            "Maliu mai lau tautalaga faiumu",  
            "Alalata'i mai le falefa ma faigata",  
            "(Falefa - Loealofi ma Tagaloa)",  
            "(Faigata - Ooao ma Faletua'i)",
            "Maliu mai lau fetalaiga Tamala ma le mamalu ia Salemuliaga o le Faleupolu o tofiga"]];
        $content['content'][] = ["Malaefono" => ["Nuuuli"]];
        return $content;
    }
    
    function getPalauliLeFalefa() {

        $content = [];
        $content['id'] = $id = $this->palauli_id + 2;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->palauli_id;
        $content['name'] = "Palauli Le Falefa";
        $content['content'][] = ["Palauli Le Falefa" => ["Afifio mai Ao e fa",
            "Maliu mai Felupolu e fa"]];

        $content['pitonuus'][] = $this->getGataivai($id);
        $content['pitonuus'][] = $this->getGautavaiMaSili($id);
        $content['pitonuus'][] = $this->getPuleia($id);
        $content['pitonuus'][] = $this->getPapaIPuleia($id);
        return $content;
    }
    
    function getGataivai($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 7;
        $content['itumalo_id'] = $this->palauli_id;
        $content['name'] = "Gataivai";
        $content['content'][] = ["Faapuupuuga o Gataivai" => ["Afio mai le aiga pa'ia o Salevalasi ma le Laulu",
                                                     "Maliu mai le Ituala mavae i lau fetalaiga Tiatia",
                                                     "Maliu mai le Togia'i ma le Fa'ala'a me le mamalu i le faleupolu o tofiga, o upu ia te oe Salemuliaga"]];

        $content['content'][] = ["Gataivai" => ["Afio mai le aiga pa'ia o Salevalasi",
            "Afio mai le pāpā i lau afioga le Laulu",
            "Afio mai Mapuilesua ma le ma'opu o Leulua'iali'i", 
            "Afio mai le matua o Toilolo",
            "Afio mai le fofoga o aiga (Tuimaseve, Amituanai)",  
            "Afio mai Laulu Logomu",                                    
            "Susu mai le matua o Umumanaia ma ou alo (Maiava ma Togailago)",
            "Susu mai Fuiavailiili ma le matua o Tuilau",                                    
            "Maliu mai le Ituala mavae i lau fetalaiga Tiatia, o oe o le vainalepa, o le pae ma le auli",
            "Maliu mai le Togia'i ma le Fa'ala'a Togia'i (Tulia ma Fagamalo) Fa'ala'a (Leuila ma Laupua)",
            "Maliu mai le falevalu (Gapao, Lema, Soso, Letoi)",
            "Maliu mai le nofoaala ma le mamalu ia Salemuliaga, o le faleupolu o tofiga"]];
        $content['content'][] = ["Malaefono" => ["Nuuuli","Leatunonofo"]];
        
         return $content;
    }
    
    function getGautavaiMaSili($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 8;
        $content['itumalo_id'] = $this->palauli_id;
        $content['name'] = "Ga'utavai ma Sili";
        $content['content'][] = ["Ga'utavai ma Sili" => 
            ["Susu mai le Tagaloa o le alii o le nu'u",
            "Afio mai le aiga sa Amituanai (Sa Leota)", 
            "Susu mai le gafa (Faaolatane, Faaofunuu, Matautia)",
            "Susu mai Ta'uo ma le aiga Sa Ta'uo",  
            "Maliu mai le tulafalealii i lau tofa Fiu",                                    
            "Maliu mai la oulua fetalaiga Taunasao ma To'ala",
            "Maliu mai Safune ma Taulauniu o oe o le faleupolu o tofiga"]];
        $content['content'][] = ["Malaefono" => ["Faavaivaiomanu"]];
        return $content;
    }
    
    function getPuleia($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 9;
        $content['itumalo_id'] = $this->palauli_id;
        $content['name'] = "Puleia";
        $content['content'][] = ["Puleia" => 
            ["Afio mai le Faasualau",
            "Afio mai le Aloali'i (Fepulea'i)", 
            "Susu mai suafa, o Ili ma Tagoa'i",
            "Afio mai Tagaileono ma le aiga sa Tagaileono",  
            "Afio mai Toleafoa",                                    
            "Maliu mai lau tofa Laumau ma upu ia te oe Satala"]];
        $content['content'][] = ["Malaefono" => ["Fitoitonu"]];
        return $content;
    }
    
    function getPapaIPuleia($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 10;
        $content['itumalo_id'] = $this->palauli_id;
        $content['name'] = "Papa I Puleia";
        $content['content'][] = ["Papa I Puleia" => 
            ["Afio mai le Ulupoao",
            "Afio mai Silofau ma Faumuina", 
            "Afio mai le tamaitai (Taematua)",
            "Maliu mai lau fetalaiga Mauisi'i ma upu ia te oe sa Uluitoga"]];
        $content['content'][] = ["Malaefono" => ["Faleulu"]];
        return $content;
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

    function getTafua() {

        $content = [];
        $content['id'] = $this->faasaleleaga_id + 1;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->faasaleleaga_id;
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
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->faasaleleaga_id;
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
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->faasaleleaga_id;
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
        $content['id'] = $id = $this->faasaleleaga_id + 4;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->faasaleleaga_id;
        $content['name'] = "Iva";
        $content['content'][] = ["Iva" => ["Afio mai le Aiga o Salevalasi",
            "Afio mai le tootoo alii (Tofilau)",
            "(O oe na iva i ai aiga o Malietoa)",
            "Afio mai Tagaileono ma le aiga Sa Tagaileono",
            "Maliu mai lau fetalaiga Leauanae",
            "Maliu mai le nofo a ituaiga ia Sasulu"]];
        $content['content'][] = ["Malaefono" => ["Avea - Tua o Fuifatu"]];

        $content['pitonuus'][] = $this->getVaisaulu($id);
        $content['pitonuus'][] = $this->getLalomalava($id);
        $content['pitonuus'][] = $this->getSafua($id);
        $content['pitonuus'][] = $this->getVaiafai($id);
        return $content;
    }

    function getVaisaulu($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 1;
        $content['name'] = "Vaisaulu";
        $content['content'][] = ["Fa'alupega" => ["Afio mai lau Afioga Tuioti",
            "Susu mai le Muliagatele ma le Toainafo",
            "Maliu mai lau fetalaiga Ti'a",
            "Maliu mai oe le Salemuliaga"]];
        return $content;
    }

    function getLalomalava($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 2;
        $content['name'] = "Lalomalava";
        $content['content'][] = ["Fa'alupega" => ["Susu mai lau susuga a le Gatoloai Faana o le tupu na tausi",
            "Susu mai le falefa o alo o Atiulagi (Manusauloa, Vevelautalo, Alaimoana ma Faafilogo)",
            "Afio mai Taito ma le Usoalii (Tumanuvao, Feaulia ma Migi)",
            "Maliu mai le nofo a ituaiga ma upu ia te oe Safuamua"]];
        return $content;
    }

    function getSafua($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 3;
        $content['name'] = "Safua";
        $content['content'][] = ["Fa'alupega" => ["Susu mai lau susuga a le Tuisafua",
            "Afio mai le gafa (Soana'i ma Patane)",
            "Susu mai aiga ma le susuga ia Tuilaepa",
            "Maliu mai lau fetalaiga Tevaga, o le Tapaau fanua, o le Matua",
            "Maliu mai le faleono"]];
        $content['content'][] = ["Malaefono" => ["Poata", "Falema'i"]];
        return $content;
    }

    function getVaiafai($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 4;
        $content['name'] = "Vaiafai";
        $content['content'][] = ["Fa'alupega" => ["Susu mai lau susuga a le Tagaloa",
            "Susu mai Taito ma Leota",
            "Maliu mai Taulauniu ma Aitutagata (Sae ma Fataloto ma o oulua fofoga Moemai ma Lealiie'e)",
            "Maliu mai Lelafaaua o lau fetalaiga Oloapu"]];
        return $content;
    }

    function getSapapalii() {

        $content = [];
        $content['id'] = $this->faasaleleaga_id + 5;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->faasaleleaga_id;
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
        $content['id'] = $id = $this->faasaleleaga_id + 6;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->faasaleleaga_id;
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

        $content['pitonuus'][] = $this->getEveeve($id);
        $content['pitonuus'][] = $this->getFuifatu($id);
        $content['pitonuus'][] = $this->getFatausi($id);
        $content['pitonuus'][] = $this->getFogapoa($id);
        $content['pitonuus'][] = $this->getTuasivi($id);

        return $content;
    }

    function getEveeve($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 1;
        $content['name'] = "'Eve'eve ma Vaimaga";
        $content['content'][] = ["Fa'alupega" => [
            "Afio mai Leilua ma le To'alima o ou alo",
            "Afio mai Sa Alalatoa (Letufuga, Tuma'ai)",
            "Maliu mai Ma'opu Tufuga ma le mamalu ia te oe Safotulafai"]];
        return $content;
    }

    function getFuifatu($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 2;
        $content['name'] = "Fuifatu ma Fusi";
        $content['content'][] = ["Fa'alupega" => [
            "Afio mai Leilua ma le To'alima o ou alo",
            "Afio mai Sa Alalatoa (Pa'u i Olopoto)",
            "Maliu mai Ma'opu Tufuga",
            "Maliu mai lau Tofa Fau'olo, o le na Aimalae",
            "ma le Mamalu ia te oe Safotulafai"]];
        return $content;
    }

    function getFatausi($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 3;
        $content['name'] = "Fatausi";
        $content['content'][] = ["Fa'alupega" => [
            "Afio mai Alii o le Au Fono (Tauiliili)",
            "Afio mai lau Afioga Leilua",
            "Afio mai le Suafa o Kea",
            "Maliu mai Tuilagi ma lau Au Fono (Pasia, Legaoi, Tano, Tuifiti Fa'asalaia'i",
            "ma le Mamalu ia te oe Safotulafai"]];
        return $content;
    }

    function getFogapoa($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 4;
        $content['name'] = "Fogapo'a";
        $content['content'][] = ["Fa'alupega" => [
            "Susu mai alo o Malietoa (Moananu, Taulapapa)",
            "Susu mai le Tei o Leota",
            "Afio mai le Ma'opu o Fepulea'i",
            "Maliu mai Namulau'ulu ma le aiga Sa Namulau'ulu",
            "Maliu mai le Falefia ma le Matua o Laufiso (Falefia o Su)"]];
        return $content;
    }

    function getTuasivi($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 5;
        $content['name'] = "Tuasivi";
        $content['content'][] = ["Fa'alupega" => [
            "Afio mai le aiga Sa Alalatoa, Pa'u me le matua o Alalatoa",
            "Maliu mai le Ma'opu Tufuga (Lema'i)",
            "Malie mai le Tapuafanua o le eleele (Motunuu)",
            "Mamalu mai le Fuaiala o le Tuiatua o le Mua'au faalele a le Safotulafai"]];
        return $content;
    }

    function getTapueleele() {

        $content = [];
        $content['id'] = $this->faasaleleaga_id + 7;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->faasaleleaga_id;
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
        $content['id'] = $id = $this->faasaleleaga_id + 8;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->faasaleleaga_id;
        $content['name'] = "Faga";
        $content['content'][] = ["Faga (Aotelega)" => [
            "Afio mai ia lo outou toaono o alii o le Faga (Unasa, Nonumalo, To'ala, Leafinealii, Ufagalilo, Sooaemalelagi)",
            "Afai mai ia le Taulagi (Vaafusuaga, Toleafoa)",
            "Maliu mai lo outou toafa (Pigi, Vaisau, Laufiso, Tapuala) ma tagata matutua",
            "Ma upu ia te oe le Faleaana ma le Salemuliaga"]];

        $content['content'][] = ["Fuaiaia o Faga" => [""]];

        $content['pitonuus'][] = $this->getSiufaga($id);
        $content['pitonuus'][] = $this->getSapigi($id);
        $content['pitonuus'][] = $this->getLuua($id);
        $content['pitonuus'][] = $this->getMalae($id);
        $content['pitonuus'][] = $this->getSalimu($id);
        return $content;
    }

    function getSiufaga($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 1;
        $content['name'] = "Si'ufaga";
        $content['content'][] = ["Fa'alupega" => [
            "Afio mai lo outou aiga Sa Unasa",
            "Afio mai lau Afioga Maseuli",
            "Afio mai Vaafusuaga",
            "Maliu mai Laufiso ma Tapuala ma le Musuia ma Sa Luasã",
            "Maliu mai le Faleaana"]];
        return $content;
    }

    function getSapigi($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 2;
        $content['name'] = "Sapigi";
        $content['content'][] = ["Fa'alupega" => [
            "Afio mai lau Afioga Unasa",
            "Afio mai lau Afioga Leafinealii",
            "Afio mai lau Afioga Sooaemalelagi",
            "Maliu mai lau fetalaiga Pigi ma oe Sa Pigi",
            "Maliu mai oe le Faleaana"]];
        $content['content'][] = ["Malaefono" => ["Maota - Tua o Fuifatu"]];
        return $content;
    }

    function getLuua($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 3;
        $content['name'] = "Lu'ua";
        $content['content'][] = ["Fa'alupega" => [
            "Afio mai le na faasa'osa'o (Nonumalo)",
            "Afio mai le suafa o Toala",
            "Afio mai le falefia o Ma'opu",
            "Susu mai le susuga a le Toetagata",
            "Maliu mai lau fetalaiga Tuileutu ma le mamalu tele ia Sa Luasã"]];
        $content['content'][] = ["Malaefono" => ["Leutu"]];
        return $content;
    }

    function getMalae($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 4;
        $content['name'] = "Malae";
        $content['content'][] = ["Fa'alupega" => [
            "Afio mai lo outou aiga Sa Toala",
            "Afio mai Tofa ma Tauiliili ma le Afioga a le Matuaalii (Vaisaualii)",
            "Maliu mai lau fetalaiga Vaisau ma le Ativaisau",
            "Maliu mai oe Salemuliaga ma le Faleaana"]];
        return $content;
    }

    function getSalimu($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 5;
        $content['name'] = "Salimu";
        $content['content'][] = ["Fa'alupega" => [
            "Afio mai lau Afioga Ufagalilo ma lou Usoalii (Tupua, Amitua)",
            "Afio mai ia Toleafoa",
            "Maliu mai lau fetalaiga Taua, ma upu ia te oe Salimu"]];
        return $content;
    }

    function getAmoaisasae() {

        $content = [];
        $content['id'] = $id = $this->faasaleleaga_id + 9;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->faasaleleaga_id;
        $content['name'] = "Amoa i Sasa'e";
        $content['content'][] = ["Aotelega o Sa'asa'ai ma Saipipi" => [
            "Afio mai ia Taulagi (Vaafusuaga, Toleafoa)",
            "Afai mai Tofa",
            "Susu mai lau susuga Su'a o le Ma'opu",
            "Maliu mai oe le matua fetalai (Segi)",
            "Maliu mai oe le Pule a Leu'u ma Salemuliaga"]];

        $content['pitonuus'][] = $this->getSaasaai($id);
        $content['pitonuus'][] = $this->getSaipipi($id);
        return $content;
    }

    function getSaasaai($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 1;
        $content['name'] = "Sa'asa'ai";
        $content['content'][] = ["Fa'alupega" => [
            "Afio mai le Usoalii (Vaafusuaga, Tea)",
            "Afio mai alii na paea le aufono (Aifitu, Afoa)",
            "Maliu mai oe le matua fetalai (Segi)",
            "Maliu mai oe le Pule (Leu'u)",
            "Maliu mai lo oulua falelua (Sao, Faumaua)",
            "Maliu mai Salemuliaga"]];
        $content['content'][] = ["Malaefono" => ["Faleloa - O le tua o Fuifatu"]];
        return $content;
    }

    function getSaipipi($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 2;
        $content['name'] = "Saipipi";
        $content['content'][] = ["Fa'alupega" => [
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
        $content['id'] = $id = $this->faasaleleaga_id + 10;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->faasaleleaga_id;
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

        $content['pitonuus'][] = $this->getAsaga($id);
        $content['pitonuus'][] = $this->getPuapua($id);
        return $content;
    }

    function getAsaga($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 1;
        $content['name'] = "Asaga";
        $content['content'][] = ["Fa'alupega" => [
            "Afio Sa Matafeo ma le Matua (Lualua)",
            "Afio mai lau Afioga Tuifeama'alo",
            "Maliu mai lau fetalaiga Leatuavao",
            "ma upu ia Salepatū ma Salemuliaga",
            "(E ao lava ia Falenaoti ona fa'amalumalu)"]];
        return $content;
    }

    function getPuapua($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 2;
        $content['name'] = "Pu'apu'a";
        $content['content'][] = ["Fa'alupega" => [
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
