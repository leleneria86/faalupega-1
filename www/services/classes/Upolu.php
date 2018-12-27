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
    protected $motu_id = 2000;
    protected $aana_id = 2100;
    protected $atua_id = 2200;
    protected $tuamasaga_matu_id = 2300;
    protected $pitonuus = [];

    function getItumalo()
    {
        $data = [
            ["id"=>$this->aana_id, "name"=>"A'ana","motu_id"=>$this->motu_id, "content"=>["Fa'alupega o A'ana"]],
            ["id"=>$this->atua_id, "name"=>"Atua","motu_id"=>$this->motu_id, "content"=>["Fa'alupega o Atua"]],
            ["id"=>$this->tuamasaga_matu_id, "name"=>"Tuamasaga i Matu","motu_id"=>$this->motu_id, "content"=>["Fa'alupega o Tuamasaga"]]
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
        $ret[] = $this->getLefaga();
        return $ret;
    }

    function getNuus() {

        $aana = $this->getAana();
        $tuamasaga_matu = $this->getTuamasagaMatu();
        $atua = $this->getAtua();
        return array_merge($aana, $tuamasaga_matu, $atua);
    }

    function getPitonuus() {

        return $this->pitonuus;
    }

    function getAtua() {

        $ret = [];
        $ret[] = $this->getFalealili();
        $ret[] = $this->getItumaloLotofaga();
        $ret[] = $this->getLepa();
        $ret[] = $this->getAleipata();
        return $ret;
    }
    
        function getAleipata() {

        $content = [];
        $content['id'] = $id = $this->atua_id + 100;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->atua_id;
        $content['pitonuus'] = [];
        $content['name'] = "Aleipata";
        $content['content'][] = ["Aleipata" => [
            "Afio mai Tuiatua fa'anofonofo, ia ia la'ua Matua (Fuataga, Tafua)",
            "Afio mai Alalamalae (Saumalu, Laupola)",
            "Susu mai Pule na ta'ita'i i Lalovi ma Malaefonoa (Satitoa, Ti'avea)",
            "Susu mai le alii o le Itu (Tauiliili)",
            "Susu mai le tane o le Itu (Amoa)",
            "Maliu mai Saleaumua"]];

        $content['pitonuus'][] = $this->getLalomanu($id);
        $content['pitonuus'][] = $this->getVailoaAleipata($id);
        $content['pitonuus'][] = $this->getUlutogia($id);
        $content['pitonuus'][] = $this->getSatitoa($id);
        return $content;
    }
    
    function getLalomanu($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 1;
        $content['name'] = "Lalomanu";
        $content['content'][] = ["Lalomanu"=> [
            "Afio mai le Tuiatua fa'anofonofo (Fuataga) o oe o le matua",
            "Afio mai le Falefia (Aulaumea, Lutau, Lefale) o alii ma o outou Maopu (Poloaalii, Alailesulu, Maeataanoa)",
            "Afio mai Amituanai o le Maopu o le Tuiaana",
            "Susu mai suafa o Letalu ma Le'ula",
            "Maliu mai outou Tootoo (Satama, Tiatia, Seuala, Mauu), o le fofoga o le Fuataga",
            "Maliu mai le igoa matua o lau Tofa Leifi",
            "Maliu mai le mamalu ia te oe Saleaumua"]];
        $content['content'][] = ["Malaefono" => ["Malaefonoa - Ona o le tali loifono i le aumaiga o malo"]];
        return $content;
    }

    function getVailoaAleipata($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 2;
        $content['name'] = "Vailoa";
        $content['content'][] = ["Vailoa"=> [
            "Afio mai Alalamalae",
            "Afio mai Alo o Sina (Saumalu, Amiatuatolu, Utumatagitagi, Toomalatai, ma le teine o Suluifaleese)",
            "Afio mai Saumalu o oe o le Sa'ofetalai ma lou Usoalii (Amiatuatolu, Utumatagitagi, Toomalatai)",
            "Afio mai Alo o le Tuiatua, lau Afioga Puepuemai, o oe o le Aomavaega, o le Tapunuu",
            "Afio mai le Aloalii, lau Afioga Palelei",
            "Afio mai Suluifaleese na toalima i ai le Usoalii",
            "Afio mai Fuaava o le Tapaau o Saleleaalii",
            "Maliu mai le Matua o Tualemoso",
            "Maliu mai Saleleaalii ma upu ia te oe Saleaaumua"]];
        $content['content'][] = ["Malaefono" => ["Fanuaea","Vailoa"]];
        return $content;
    }
    
    function getUlutogia($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 3;
        $content['name'] = "Ulutogia";
        $content['content'][] = ["Ulutogia"=> [
            "Afio mai oe le Ie, o le tama a le Malo (Sagapolutele)",
            "Susu mai le Matua o Falana'ipupu",
            "Susu mai le Taufia o Taiai",
            "Susu mai le Usoalii",
            "Maliu mai le nofo a Alataua ia te oe Saluafata"]];
        $content['content'][] = ["Malaefono" => ["Ulutautogia"]];
        return $content;
    }
    
    function getSatitoa($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 4;
        $content['name'] = "Satitoa";
        $content['content'][] = ["Satitoa"=> [
            "Afio mai Faliuila ma lou Sa'otā o Te'o",
            "Afio mai Faasisina o Lesa ma Lesa",
            "Susu mai aiga e lua, o Oso ma Seupule",
            "Maliu mai Oe le Faleatua ma upu ia te oe Leatitoafaigā"]];
        $content['content'][] = ["Malaefono" => ["Vaifalesa"]];
        return $content;
    }

    function getTuamasagaMatu() {

        $ret = [];
        $ret[] = $this->getLaulii();
        $ret[] = $this->getLetogo();
        $ret[] = $this->getSaleupolu();
        $ret[] = $this->getFuaiupolu();
        $ret[] = $this->getSagauga();
        $ret[] = $this->getFaleata();
        $ret[] = $this->getFaleula();
        $ret[] = $this->getMalie();
        $ret[] = $this->getAfega();
        $ret[] = $this->getTuanai();
        $ret[] = $this->getSaleimoa();
        return $ret;
    }

    function getLaulii() {

        $content = [];
        $content['id'] = $this->tuamasaga_matu_id + 1;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->tuamasaga_matu_id;
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
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->tuamasaga_matu_id;
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
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->tuamasaga_matu_id;
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
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->tuamasaga_matu_id;
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
        $content['id'] = $id = $this->tuamasaga_matu_id + 3;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->tuamasaga_matu_id;
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
        $content['content'][] = ["Malaefono" => ["Motootua", "Sinave"]];

        $content['pitonuus'][] = $this->getMatautu($id);
        $content['pitonuus'][] = $this->getApia($id);
        $content['pitonuus'][] = $this->getTanugamanono($id);
        return $content;
    }

    function getMatautu($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 1;
        $content['name'] = "Matautu";
        $content['content'][] = ["Fa'alupega" => [
            "Afio mai le Alo o Sina (Toomalatai)",
            "Susu mai oe Tuisamau (Feagaimaalii, Samau)",
            "Maliu mai le fetalaiga ia te oe le Faletou ma oe le Vainalepa"]];
        return $content;
    }

    function getApia($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 2;
        $content['name'] = "Apia";
        $content['content'][] = ["Fa'alupega" => [
            "Afio mai le Alo o Sina (Seumanutafa)",
            "Afio mai le Fuaifale o Salevalasi (Tamaseu, Faualo)",
            "Afio mai laua Matua (Onofiatele, Faaolesa)",
            "Susu mai le aiga o Sa Malietoa",
            "Afio mai le paia eseese o aiga",
            "Maliu mai oe le Faletou ma le Vainalepa"]];
        return $content;
    }

    function getTanugamanono($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 1;
        $content['name'] = "Tanugamanono";
        $content['content'][] = ["Fa'alupega" => [
            "Afio mai le Usoalii (Tupuola, Faumuina, Siligatusa)",
            "Afio mai oulua Matua o Toomalatai (Leupolu, Tuisaula)",
            "Susu mai alo o Malietoa (Utuota, Utulomianuu, Fetaoa'i, Atoa, Fuaiupolu, Laamalefolasa)",
            "Mamalu maia oe le Faletou ma le Vainalepa"]];
        return $content;
    }

    function getFaleata() {

        $content = [];
        $content['id'] = $this->tuamasaga_matu_id + 4;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->tuamasaga_matu_id;
        $content['name'] = "Faleata";
        $content['content'][] = ["Faleata" => [
            "Afio mai tama a le fale (Faumuina, Matai'a)",
            "Susu mai Seiuli o le alo o Malietoa",
            "Afio mai Tapa'au (Telesa, Mataafa)",
            "Maliu mai lo outou toafa (Une, Manuleleua, Ulu, Ale)",
            "Maliu mai le Pulelua ma le Faiga, faapea foi le Nofoapule",
            "Maliu mai Tauaitu ma le saofaiga a le Atua, faapea foi upu ia te oe le Faleata"]];

        $content['content'][] = ["Vaimoso" => [
            "Susu mai Matai'a o le tama a le fale",
            "Afio mai Usoalii ma le matua o Patauave",
            "Maliu mai oulua matua (Une ma le Aogamalie, Manuleleua ma le Faleagafulu)",
            "Susu Nofotama ma matua o To'ala ma Tiufea"]];

        $content['content'][] = ["Lepea" => [
            "Afio Faumuina, Usoalii ma Tamapa'a",
            "Afio mai Leota ma Letelemataneolevao",
            "Afio mai la Afioga Letele",
            "Maliu mai le Falevalu ma le Falelima o Tagatanoa",
            "Maliu mai foi oulua nofoa sa o Ai'i ma Vaitagutu ma lo oulua vaifale",
            "ma upu i le saofaiga a le Atua"]];

        $content['content'][] = ["Vailoa" => [
            "Susu mai Siliga ma Umusa",
            "Maliu mai lau tofa Nu'u ma le Atianu'u",
            "Ma upu ia te oe le Faigã"]];

        $content['content'][] = ["Vaiusu" => [
            "Susu mai Seiuli o le alo o Malietoa",
            "Afio mai le Falefia o alii",
            "Maliu mai lau tofa Ulugia"]];

        $content['content'][] = ["Vaitele" => [
            "Afio mai Galumalemana o le Aloalii",
            "Maliu mai oe le ala o le Pule, o Toi ma lau tofa Pula"]];

        $content['content'][] = ["Saina" => [
            "Afio le alo o le Tuitoga (Faletaoga)",
            "Maliu mai lo oulua toalua (Lauati, Motuopua'a)",
            "Ma upu ia Sata'alaua"]];

        $content['content'][] = ["Toamua" => [
            "Afio mai le itu lua o Satunumafono",
            "Palusalue ma Aumuagaolo ma Taoa",
            "Maliu mai le matua o Puipui",
            "Maliu mai lau tofa 'Ale ma Inailau na o'o i lo outou aiga",
            "Tupalaimuli ma Taua'iupolu, le Ãoãniu ma le Momoti"]];

        $content['content'][] = ["Safune" => [
            "Afio mai Seaanatoe, ma lona aiga o Pepe ma Fanene",
            "Maliu mai lau tofa Va'aulu na falelima i ai lo latou to'afa"]];

        $content['content'][] = ["Puipa'a" => [
            "Maliu mai lau tofa 'Ulu ma lo outou aiga (Seiulialii, Laufou)",
            "Faapea upu i le Aogamalie"]];

        $content['content'][] = ["Malaefono" => ["Lepea - Fono o le Manino", "Vaitagutu - Fono o Fa'alavelave ma Puapuaga"]];
        return $content;
    }

    function getFaleula() {

        $content = [];
        $content['id'] = $this->tuamasaga_matu_id + 5;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->tuamasaga_matu_id;
        $content['name'] = "Faleula";
        $content['content'][] = ["Faleula" => [
            "Susu mai le Tapa'au faasisina",
            "Susu mai oe le Malietoa i lou fala na fofola ma lou nofoa vaevaeloloa i lou Maota i Foga'a",
            "Susu mai Toetaufanua o Telea ma Loau, o e tauaveina le malelega a le Malietoa",
            "Susu mai alo o le Malietoa, o lau Susuga Nuuialii o oe o le Aofanauga ma le alii o aiga, o lau susuga Seupule ma Taogaga",
            "Susu mai lau susuga a le Muliagatele",
            "Susu mai maopu o le Tuiaana (Tuimaugapo, Niulevaea)",
            "Maliu mai oulua Tapuafanua o le nuu (Leatufale, Motunuu)",
            "Maliu mai Tupaia o le (Sona) o le Malietoa",
            "Maliu mai le tagata foun o le Malietoa o lau fetalaiga Laupa",
            "Mamalu maia oe le Faletolu"]];
        $content['content'][] = ["Malaefono" => ["Foga'a"]];
        return $content;
    }

    function getMalie() {

        $content = [];
        $content['id'] = $this->tuamasaga_matu_id + 6;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->tuamasaga_matu_id;
        $content['name'] = "Malie";
        $content['content'][] = ["Malie" => [
            "Susu mai le Tapa'au faasisina, o lau susuga Malietoa o le na faafofoga i ai Samoa",
            "Afio mai Maualaivao ma le aiga Sa Maualaivao",
            "Afio mai le Matua o Faamausili",
            "Afio mai le Fuaialii, o lau susuga Taito",
            "Susu mai lau susuga Seiuli",
            "Maliu mai pou e fitu o le fale o Malietoa, ma upu ia te oe Auimatagi"]];
        $content['content'][] = ["Malaefono" => ["Malie"]];
        return $content;
    }

    function getAfega() {

        $content = [];
        $content['id'] = $this->tuamasaga_matu_id + 7;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->tuamasaga_matu_id;
        $content['name'] = "Afega";
        $content['content'][] = ["Afega" => [
            "Afifio mai aiga Sa Gauifaleai",
            "Afifio mai oulua Alalatama (Savea, Ututaaloga)",
            "Afio mai oe le matua (Manuaifua)",
            "Afio mai le Usoalii (Laa, Maposua)",
            "Afio mai Leuluaialiii",
            "Afio mai alo o Tofigaalii (Pualau, Tagitagialemanu)",
            "susu mai lo oulua toalua o Fata ma Maulolo o Tuitui o le Natoaitele",
            "Susu mai Tuisamau",
            "Maliu mai le vagana i Tulafale, o Leu ma Vaitimu na au taele ai Alataua"]];
        $content['content'][] = ["Malaefono" => ["Vaitoelau"]];
        return $content;
    }

    function getTuanai() {

        $content = [];
        $content['id'] = $this->tuamasaga_matu_id + 8;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->tuamasaga_matu_id;
        $content['name'] = "Tuana'i";
        $content['content'][] = ["Tuana'i" => [
            "Afio mai Saena ma le aiga Sa Saena",
            "Susu mai le alo o Fuatino (Luafãtasaga)",
            "Afio mai Tuitea o lē na tofia pãpã",
            "Afio mai mai Alalatama (Fa'avaoga, Ututaaloga)",
            "Maliu mai Lefale ma le afu Alataua ma lau fetalaiga Tupailesa"]];
        $content['content'][] = ["Malaefono" => ["Tanumafili"]];
        return $content;
    }

    function getSaleimoa() {

        $content = [];
        $content['id'] = $id = $this->tuamasaga_matu_id + 8;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->tuamasaga_matu_id;
        $content['name'] = "Saleimoa";
        $content['content'][] = ["Saleimoa (Faalupega aoao tetele)" => [
            "Afio mai aiga e tolu (Pulatele, Tilialo, Luatuanuu)",
            "Maliu mai Luatua ma lou Gautaala",
            "Mamalu mai oe le Faletolu"]];
        $content['content'][] = ["Malaefono" => ["Lotoso'a - Afifio ai le aiga Sa Tilialo"]];

        $content['pitonuus'][] = $this->getLevi($id);
        $content['pitonuus'][] = $this->getLotosoa($id);
        $content['pitonuus'][] = $this->getNonoa($id);
        $content['pitonuus'][] = $this->getSalepouae($id);
        $content['pitonuus'][] = $this->getTufulele($id);
        return $content;
    }

    function getLevi($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 1;
        $content['name'] = "Levi";
        $content['content'][] = ["Fa'alupega" => [
            "Susu mai alo o Malietoa (Sapa'u, Lei'ata'atimu)",
            "Afio mai le aiga Sa Tilialo",
            "Maliu mai Luatua ma le Gautaala ma Upu ia te oe le Faletolu"]];
        return $content;
    }

    function getLotosoa($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 2;
        $content['name'] = "Lotoso'a";
        $content['content'][] = ["Fa'alupega" => [
            "Afio mai alo o Sina (Patea, Futialo)",
            "Afio mai Nonumalo, o oe o le Maopu tasi i le aiga Sa Tilialo, o oe foi o le tama a le Malo",
            "Maliu mai Luatua ma le Gautaala ma Upu ia te oe le Faletolu"]];
        return $content;
    }

    function getNonoa($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 3;
        $content['name'] = "Nono'a";
        $content['content'][] = ["Fa'alupega" => [
            "Afio mai le sao o le aiga Sa Tilialo,o lau Afioga Tilialo",
            "Afio mai le matua o le aiga Sa Tilialo (Toalepai)",
            "Maliu mai Luatua ma le Gautaala ma Upu ia te oe le Faletolu"]];
        return $content;
    }

    function getSalepouae($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 4;
        $content['name'] = "Salepoua'e";
        $content['content'][] = ["Fa'alupega" => [
            "Susu ai Pulatele o le Toetaufanua",
            "Susu mai Maopu ma Usoalii (Maopu o Faalogou ma Taituave)",
            "Maliu mai Luatua ma le Gautaala ma le Faletolu"]];
        return $content;
    }

    function getTufulele($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 5;
        $content['name'] = "Tufulele";
        $content['content'][] = ["Fa'alupega" => [
            "Susu mai Luatuanuu",
            "Afio mai le Maopu o Matiu (o ia foi o le aloalii) (Galumalemana)",
            "Afio mai le Usoalii (Faletaua'i, Faaootoa)",
            "Maliu mai oe le Siufanua"]];
        return $content;
    }

    // A'ana
    function getFaleasiu() {

        $content = [];
        $content['id'] = $this->aana_id + 10;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->aana_id;
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
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->aana_id;
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
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->aana_id;
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
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->aana_id;
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
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->aana_id;
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
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->aana_id;
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
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->aana_id;
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
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->aana_id;
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
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->aana_id;
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
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->aana_id;
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
    
    function getLefaga() {
        $content = [];
        $content['id'] = $id = $this->aana_id + 9;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->aana_id;
        $content['name'] = "Lefaga";
        $content['content'][] = ["Lefaga" => [
            "Afio mai le Aiga Satuala",
            "Afio mai le Aiga Taulagi",
            "Maliu mai oe Tuisavailu'u, ma le Gaga'eolo, faapea oe le Faleaana",
            "Mamalu mai oe Leulumoega"]];

       $content['pitonuus'][] = $this->getFaleseelaMaMatafaa($id);
       $content['pitonuus'][] = $this->getSafaatoa($id);
       $content['pitonuus'][] = $this->getTafagamanu($id);
        $content['pitonuus'][] = $this->getSavaia($id);
        $content['pitonuus'][] = $this->getGagaifo($id);
        $content['pitonuus'][] = $this->getMatautuLefaga($id);
        return $content;
    }
    
    function getFaleseelaMaMatafaa($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 1;
        $content['name'] = "Falese'ela ma Matafa'a";
        $content['content'][] = ["Faapuupuuga o Falese'ela" => ["Afio mai le Aiga Taulagi ma Matua o Satuala",
                                                               "Maliu mai oe le Faleaana ma le tagata o le vavau (Taloolevavau)" ]];
        $content['content'][] = ["Falese'ela ma Matafa'a" => [
            "Afio mai le Aiga Taulagi (Vaafusuaga, Alalagā)",
            "Susu mai le Usoalii (Unasa, Mase, Patea, Pauli, Maiava)",
            "Afio mai Matua o Satuala (Fenunuti, Leatuavao)",
            "Susu mai Samaila ma le Ati Samaila",
            "Maliu mai Taloolevavau, o le Tootoo o Maauga",
            "Maliu mai Polo e Fa o le Faleaana (Ausalilo, Autaloto, Aufaamulia, Taloolevavau)",
            "Maliu mai Soamauli o le Savali ma le mamalu o le Faleaana"]];
        $content['content'][] = ["Malaefono" => ["Mulivai (Malae o le manino)", "Lalotoa (Malae o le aava o tua o Ma'auga"]];
        return $content;
    }
    
    function getSafaatoa($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 2;
        $content['name'] = "Safa'ato'a";
        $content['content'][] = ["Safa'ato'a" => [
            "Susu mai lou Tapaau o le Lavasiiuta ma le Lavasiitai",
            "Afio mai le Uso ma le Ailaoa",
            "Maliu mai lau Tofa Mua'i'ava, o le Tafa'ipa'ia",
            "Maliu mai lau Fetalaiga Masinailupe ma lou itu Launiu",
            "Maliu mai oe Tuisavailuu ma le nofo a Ituaiga"]];
        $content['content'][] = ["Malaefono" => ["Vatia (E alala ai Tuisavailuu)"]];
        return $content;
    }
    
    function getTafagamanu($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 3;
        $content['name'] = "Tafagamanu";
        $content['content'][] = ["Tafagamanu" => [
            "Afio mai le Aiga Satuala",
            "Afio mai Tuala Tamaalelagi o le pāpā tausi Tuisavailuu",
            "Afio mai Tusani",
            "Afio mai Leaupepe",
            "Susu mai le Matua o Palealemafuta",
            "Maliu ai Sa'iauta"]];
        $content['content'][] = ["Malaefono" => ["Tafagamanu"]];
        return $content;
    }
    
    function getSavaia($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 4;
        $content['name'] = "Savaia";
        $content['content'][] = ["Savaia" => [
            "Afifio mai Fui ma Malama",
            "Afio mai lau Afioga Tusani",
            "Maliu mai oe Leatialii"]];
        return $content;
    }
    
    function getGagaifo($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 5;
        $content['name'] = "Gagaifo";
        $content['content'][] = ["Gagaifo" => [
            "Susu mai lau susuga Su'a",
            "Afio mai Faumui",
            "Afio mai le Ma'opu o lau afioga Tuaopepe",
        "Susu mai Usoalii (Toluma'anave, La'ulu, Manu'a)",
        "Maliu mai Gagaifo o le vao"]];
        return $content;
    }
    
    function getMatautuLefaga($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 6;
        $content['name'] = "Matautu";
        $content['content'][] = ["Matautu" => [
            "Susu mai Lemalu ma Le Mamea, ma lo oulua Fale na Toese",
            "Susu mai lo oulua Usoalii (Taimalie, Togia)",
        "Maliu mai Salele'aalii"]];
        $content['content'][] = ["Malaefono" => ["Malae o le toto"]];
        return $content;
    }
    
    function getLepa() {

        $content = [];
        $content['id'] = $id = $this->atua_id + 17;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->atua_id;
        $content['pitonuus'] = [];
        $content['name'] = "Lepa";
        $content['content'][] = ["Lepa - Aoaotetele o le Itumalo" => [
            "Afio mai Faolotoi",
            "Afio mai Maoputaulagi, Falanaipupu, Puletiuatoa, Puaauli, Sogimaletavai",
            "Afio mai Tupua o le aloalii",
            "Afio mai Sagapolutele o le Ao o Faleupolu",
            "Afio mai Alalamalae, Lolofietele o le alo o le Tuiatua, Tuilaepa o le alo o Malietoa, Poalaga o le alo o Mata'afa",
            "Afio mai Tupuola ma le matua o Tago",
            "Afio mai Usoalii",
            "Maliu mai oulua Punefu, o Fatialofa ma Auelua",
            "Maliu mai Malielegaoi ma le Faleatua ma Salefao"]];
         $content['content'][] = ["Faapuupuuga" => [
            "Afio mai Faolotoi ma Maoputaulagi ma Alalamalae",
            "Afio mai Tupuola ma Salevalasi",
            "Maliu mai oulua Punefu, Malielegaoi ma le Faleatua ma upu ia Sa Lefao"]];
                $content['content'][] = ["Malaefono" => [
            "Lepa - Malae o le Totoa (Auelua)",
            "Feuu - Malae o le Aava (Fatialofa)"]];

        $content['pitonuus'][] = $this->getVaigalu($id);
        $content['pitonuus'][] = $this->getLealatele($id);
        $content['pitonuus'][] = $this->getSiupapa($id);
        $content['pitonuus'][] = $this->getSaleapaga($id);
        $content['pitonuus'][] = $this->getAufaga($id);
        return $content;
    }
    
    function getVaigalu($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 1;
        $content['name'] = "Vaigalu";
        $content['content'][] = ["Vaigalu"=> [
            "Afio mai Faolotoi ma Taua'a",
            "Susu mai le matua o Niumata ma le Maopu o le Tuiaana",
            "Susu mai Ponemafua ma ou alo, Teo ma Afutai",
            "Mamalu maia le fetalaiga ia Semua ma Utaia'ana ma upu ia Salefao"]];
        return $content;
    }
    
    function getLealatele($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 2;
        $content['name'] = "Lealatele";
        $content['content'][] = ["Lealatele"=> [
            "Susu mai Alalamalae",
            "Susu mai Lolofietele o le alo o le Tuiatua",
            "Susu mai Tuilaepa o le alo o Malietoa",
            "Susu mai Poalaga o le alo o Mataafa",
            "Mamalu maia le fetalaiga ia Palea ma 'Oloialii ma upu ia Salefao"]];
        return $content;
    }
    
    function getSiupapa($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 3;
        $content['name'] = "Siupapa";
        $content['content'][] = ["Siupapa"=> [
            "Afio mai Maoputaulagi (Falanaipupu, Puletiuatoa)",
            "Afio mai le Aloalii ma le Sagapolutele",
            "Mamalu maia le fetalaiga ia Fiu ma Utaulu ma upu ia Salefao"]];
        return $content;
    }
    
    function getSaleapaga($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 4;
        $content['name'] = "Saleapaga";
        $content['content'][] = ["Saleapaga"=> [
            "Susu mai le Puaauli ma Sogimaletavai",
            "Susu maia oulua matua (Mata, Luamanuvae)",
            "Susu mai lau susuga Lesa o oe o le manūtoao",
            "Mamalu maia le fetalaiga ia Lopau ma lau Tofa Falefata ma upu i le nofo a Taupolo"]];
        return $content;
    }
    
    function getAufaga($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 5;
        $content['name'] = "Aufaga";
        $content['content'][] = ["Aufaga"=> [
            "Afio mai Salevalasi",
            "Afio mai Tupuola ma Tago ma le Falefia o le Usoalii",
            "Susu mai le Tama a Pa'a ma le matua o Pue'e",
            "Mamalu maia le fetalaiga ia Popo ma Talimao ma upu ia Sa Lefao"]];
        return $content;
    }
    
    function getItumaloLotofaga() {

        $content = [];
        $content['id'] = $id = $this->atua_id + 13;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->atua_id;
        $content['pitonuus'] = [];
        $content['name'] = "Lotofaga";
        $content['content'][] = ["Aoaotetele o le Itumalo" => [
            "Afio mai Fiame ma Salevalasi, ma le latou tama",
            "Maliu ai oulua ali'imau o faleupolu ma le Faleatua",
            "Susu mai Sitagata ma lo outou aiga Sa Sitagata"]];

        $content['pitonuus'][] = $this->getMatatufu($id);
        $content['pitonuus'][] = $this->getLotofaga($id);
        $content['pitonuus'][] = $this->getVavau($id);
        return $content;
    }
    
    function getMatatufu($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 1;
        $content['name'] = "Matatufu";
        $content['content'][] = ["Matatufu"=> [
            "Afio mai le paia o Alala Maota (Tauiliili, Fiaola)",
            "Afio mai le paia o le Usoalii ma le Matua o Tapu",
            "Afio mai le alii o Aiga, o lau Afioga Tuia",
            "Maliu mai le mamalu i le Falefa o Saleapaga ma Ituala",
            "faapea le Faleatua"]];
        return $content;
    }
    
    function getLotofaga($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 2;
        $content['name'] = "Lotofaga";
        $content['content'][] = ["Lotofaga"=> [
            "Afio mai le aiga paia o Salevalasi ma le latou tama (Mata'afa)",
            "Afio mai le Sa'ofaapito, o lau afioga Fiame, o le Afioga Tutasi, afio mai le Sa'oppapa o lau afioga Fiame, Alafalafa Tuna, o oe o le Tuiataua",
            "Afio mai le Faleagafulu a Fiame",
            "Afio mai le na ulua'i sa'o (Tupuola, Seigafolava)",
            "Afio mai Samatauā, o le na ulumatua i Tofiga",
            "Afio mai le Falevalu o Seigafolava",
            "Susu mai Amituana'i, o oe o le alii o le Ao, o le tupe Tanoaese, o oe foi o le tama a Aitu ma tagata",
            "Afifio mai oulua o Faauluuluga o le aiga Salevalasi (Teteo, Tumanuvao)",
            "Maliu mai aliimau o Faleupolu (Lemauga, Fotua'aututusa)",
            "Mamalu maia oe le Faleatua",
            "susu mai le vaa Taumuatasi i Faigamalo, o oe o le tamasa o Ituau ma Alataua, o lau susuga Sitagata a lau Faalauateaga",
            "ma le aiga sa Sitagata"]];
        $content['content'][] = ["Malaefono" => [
            "Lotofaga",
            "Tanumaleu",
            "Mulifusi"]];
        return $content;
    }
    
    function getVavau($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 3;
        $content['name'] = "Vavau";
        $content['content'][] = ["Vavau"=> [
            "Afio mai Tago, o le sa'o o le aiga sa Tago (O le tao e tasi o Atua)",
            "Afio mai le Faasisina (Leota)",
            "Afio mai Polaia o le Faatui",
            "Afio mai Fonoti ma Telegalolou",
            "Afio mai Saofa'ileta (O le Tamapa'a o le alo o Fiame)",
            "Afio mai Luailelupe (O le Alii o le Toavalu)",
            "Afio mai Lelili'o ma Taua'a",
            "Afio mai Tauiliili ma le nofo a Maopu (Fuimapoao, Salimaletoloa)",
            "Maliu mai le Aliimau o Faleupolu (lau Tofa Fotua'aututusa)",
            "Mamalu maia le Tauā na eseese ma upu ia te oe le Faleatua"]];
        return $content;
    }

    function getFalealili() {

        $content = [];
        $content['id'] = $id = $this->atua_id + 1;
        $content['motu_id'] = $this->motu_id;
        $content['itumalo_id'] = $this->atua_id;
        $content['pitonuus'] = [];
        $content['name'] = "Falealili";
        $content['content'][] = ["Falealili" => [
            "Afio mai Alalagafa, ma le la nofo o Tulafale, faapea fo'i le Tauãga eseese ia te oe Falealili"]];

        $content['pitonuus'][] = $this->getSaga($id);
        $content['pitonuus'][] = $this->getTafatafa($id);
        $content['pitonuus'][] = $this->getMatavai($id);
        $content['pitonuus'][] = $this->getMalaemalu($id);
        $content['pitonuus'][] = $this->getSatalo($id);
        $content['pitonuus'][] = $this->getSapunaoaMaFaleulu($id);
        $content['pitonuus'][] = $this->getPiu($id);
        $content['pitonuus'][] = $this->getSalesatele($id);
        $content['pitonuus'][] = $this->getSiuniu($id);
        $content['pitonuus'][] = $this->getSalani($id);
        $content['pitonuus'][] = $this->getUtulaelae($id);
        $content['pitonuus'][] = $this->getSapoe($id);
        return $content;
    }

    function getSaga($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 1;
        $content['name'] = "Sãga (Saleilua, Poutasi, Vaovai, Matautu)";
        $content['content'][] = ["Fa'alupega"=> [
            "Susu mai lau susuga Tuatagaloa, le Sa'ofetalai, o le To'o o le Savili, o le Ki o le Malo",
            "Afio mai lau Afioga Meleisea, o le Sa'oaualuma",
            "Afio mai Leilua ma au Tamatane (Touli, Asuao, Tapu, Lealiiee)",
            "Afio mai le Matua o Fanene",
            "Afio mai Salevalasi (Mata'utia, Tupuola)",
            "Susu mai Tuisamoa o le Tapa'au Fa'asisina, o le Solomuli o Manumea",
            "Susu mai le pa'ia o le Usoalii",
            "Susu mai Lufilufi ma upu ia te oe Taulauniu"]];
        $content['content'][] = ["Malaefono" => [
            "Poutasi - O le Tua o Falefasa, Afifio ai Tuatagloa ma Meleisea",
            "Lalofau - Afio ai Fanene",
            "Leatumalama - Afio ai Leilua"]];
        return $content;
    }

    function getTafatafa($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 2;
        $content['name'] = "Tafatafa";
        $content['content'][] = ["Fa'alupega" => [
            "Susu mai oulua Suafa o Salea ma Sa'oleititi",
            "Afio mai oe le Matua o lau Afioga Alaimoana",
            "Maliu mai Sa Alaimoana, faapea le mamalu ia te oe Falealili"]];
        return $content;
    }

    function getMatavai($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 3;
        $content['name'] = "Matavai";
        $content['content'][] = ["Fa'alupega" => [
            "Susu mai oulua Suafa o Taito ma Ula",
            "Maliu mai oe Tala'olefale, o lau Tofa Falaila ma le Lautinalaulelei ia te oe Falealili"]];
        return $content;
    }

    function getMalaemalu($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 4;
        $content['name'] = "Malaemalu";
        $content['content'][] = ["Fa'alupega" => [
            "Susu mai Pulotu o le alo o Tuatagaloa",
            "Maliu mai le Alii o aiga, o lau tofa Talauega",
            "Maliu mai le Anofale ma ou Manū, faapea upu ia te oe Falealili"]];
        return $content;
    }

    function getSatalo($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 5;
        $content['name'] = "Satalo";
        $content['content'][] = ["Fa'alupega" => [
            "Afio mai alo o Fanene",
            "Afio mai Te'o, o oe o le Anavataua na faaleo ai Pãpã o Tupua (O le Alii o Aiga)",
            "Afio mai Fonoti na e alaala Maota i Falefasa",
            "Susu mai le Usaoalii o Alo o Tuatagaloa (Uliuli'aleava, Maisoa Alo ma Soi)",
            "Maliu mai le Aiga Satalo",
            "Maliu mai lau Tofa Taloolema'agao, o le Sa'o ia Tuiatua",
            "Maliu mai lau Tofa Fualautoalasi, o oe o le Sa'ofetalai",
            "Maliu mai le Alii o Aiga, o lau Tofa Talauega",
            "Maliu mai le Tei o lau Tofa Taveuveu",
            "Maliu mai lau Tofa Onofia, o oe o le Matua",
            "Maliu mai Salele'aalii ma lou Tapa'au o le Fa'atufugã",
            "Maliu maia le Lautinalaulelei ia te oe Falealili"]];

        $content['content'][] = ["Fa'apu'upu'uga o Satalo" => [
            "Afio mai Alo o Fanene",
            "Susu mai lo outou Usoalii",
            "Maliu mai le Aiga Satalo, i Lau Tofa Taloolema'agao ma le Usonatotõ",
            "Maliu mai le Matua ma Salele'aalii ma le Lautinalaulelei"]];

        $content['content'][] = ["Malaefono" => [
            "Fanuatanu",
            "Papa",
            "Fa'atiuga"]];
        return $content;
    }
    
    function getSapunaoaMaFaleulu($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 6;
        $content['name'] = "Sapunaoa ma Faleulu";
        $content['content'][] = ["Sapunaoa ma Faleulu" => [
            "Susu mai Patea o le Alalatama, ma le alo o Malietoa o Ta'a",
            "Susu mai Muliava o le fofoga o le vai",
            "Maliu mai Maaelopa ma Leavasa o e na leoleo i le fale o Ituau ma Alataua",
            "Maliu mai Tuiloma ma Taituuga o manu o le Tuasivi e fagogota i tai e lua, faapea upu ia Sapunaoa ma Sasala o le lotoifale o le Manusamoa"]];
        $content['content'][] = ["Malaefono" => ["Falepunaoa"]];
        return $content;
    }
    
    function getPiu($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 7;
        $content['name'] = "Piu";
        $content['content'][] = ["Piu" => [
            "Susu mai lau Susuga Fuataufao",
            "O oe o le suafa Faalupea",
            "Alalatai mai e e matutua i le nuu",
            "O lau tofa Maseafa ma Muliaga ma le Lautinalaulelei"]];
        $content['content'][] = ["Malaefono" => ["Falepunaoa"]];
        return $content;
    }
    
    function getSalesatele($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 8;
        $content['name'] = "Salesatele";
        $content['content'][] = ["Salesatele" => [
            "Susu mai lau Susuga Satele ma ou Alo (Alaifea, Faleafaga)",
            "Afio mai Alo o Leilua (Fonoti, Sialega)",
            "Afio mai lau Afioga a le Aloalii (Paitomaleifi)",
            "Susu mai le Alo o Taulapapa, o lau susuga Leota",
        "Maliu mai le mamalu o lo outou Toafa o le Aiga Talimalama (Leleimalefaga, Lalau, Tauaefā, Tagitagiāpua)",
        "Maliu mai upu i le Ala o Usoalii (Mali'o) ma le Tama a Malae e lua (Faleafaga)",
        "Maliu mai upu i le Tuānuu ma le Nofoala"]];
        $content['content'][] = ["Malaefono" => ["Malaealetalu"]];
        return $content;
    }
    
    function getSiuniu($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 9;
        $content['name'] = "Siuniu";
        $content['content'][] = ["Siuniu" => [
            "Afio mai le Taufia a Moeitalalelei (Togiailupe, Meleisea, Teo)",
            "Maliu mai oe le Taufā (Sasala, Taelega, Tali, Lauvao)"]];
        return $content;
    }
    
    function getSalani($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 10;
        $content['name'] = "Salani";
        $content['content'][] = ["Salani" => [
            "Afio mai le Gafatasi, o lau Afioga Fuimaono",
            "Susu mai Leasiolagi o le Saoao",
            "Afio mai Sifuiva o le Matuaalii",
            "Afio mai Tupua ma le Aumaga o Atua ma Aana, Sotaneavae ma Aliimau o Faleupolu",
        "Maliu mai lau Tofa le Igoa-matua o Tofuaiofoia",
        "Maliu mai le Aiga Sataeleava",
        "Maliu mai Pao ma Aiga maulupe ma lo latou Fuaiala o Samani"]];
        return $content;
    }
    
    function getUtulaelae($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 11;
        $content['name'] = "Utulaelae";
        $content['content'][] = ["Utulaelae" => [
            "Afio mai lau Afioga a le Aloalii (Muagututia)",
            "Susu mai Tufugafale ma Seugaalii",
            "Afio mai lau Afioga a le Gafatasi (Fuimaono)",
            "Maliu mai le Faletolu ma le Lautinalaulelei"]];
        return $content;
    }
    
    function getSapoe($id)
    {
        $content = [];
        $content['motu_id'] = $id;
        $content['id'] = $id + 12;
        $content['name'] = "Sapo'e";
        $content['content'][] = ["Sapo'e" => [
            "Afio mai lau Afioga le matua (Alalatoa)",
            "Afio mai Alo o Samalaulu (Tafuamaseafa, Taala, Matuaao, Afegogo)",
            "Maliu mai Ga'opo'a, o le tualfale a le Tuiatua",
            "Maliu mai Letogaulupuaa, na e faialaga",
        "Maliu mai Faatili, o le Tapunuu",
        "Mamalu mai Sa Faatili ma le Faleono"]];
        $content['content'][] = ["Malaefono" => ["Malaefono - O le tua o Salani"]];
        return $content;
    }
}
