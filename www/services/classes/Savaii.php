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
    protected $asau_id = 3300;
    protected $palauli_id = 3400;
    protected $pitonuus = [];

    function getItumalo()
    {
        $data = [
            ["id"=>$this->faasaleleaga_id, "name"=>"Fa'asalele'aga","motu_id"=>$this->motu_id, "content"=>["Fa'alupega o Fa'asalele"]],
            ["id"=>$this->salega_id, "name"=>"Salega","motu_id"=>$this->motu_id, "content"=>["Fa'alupega o Salega"]],
            ["id"=>$this->asau_id, "name"=>"Asau","motu_id"=>$this->motu_id, "content"=>["Fa'alupega o Asau"]],
            ["id"=>$this->palauli_id, "name"=>"Palauli","motu_id"=>$this->motu_id, "content"=>[
                                                                                              "Afifio mai Faasisina ma Sa Lilomaiava",
                                                                                              "Afifio mai Tapa'au o le Itu",
                                                                                              "Mamalu mai To'oto'o o Vailoa, ma le faleupolu o tofiga",
                                                                                              "Alalata'i le pule ia te oe Palauli"]]
        ];
        return $data;
    }

    function getNuus() {

        $faasaleleaga = $this->getFaasaleleaga();
        $palauli = $this->getPalauli();
        return array_merge($faasaleleaga, $palauli);
    }

    function getPitonuus() {

        return $this->pitonuus;
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
    
    function getSatupaitea() {

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
