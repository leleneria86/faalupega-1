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
        $atua = $this->getAtua();
        return array_merge($aana, $tuamasaga_matu, $atua);
    }
    
    function getAtua() {

        $ret = [];
        $ret[] = $this->getFalealili();
        return $ret;
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

    function getFaleata() {

        $content = [];
        $content['id'] = $this->tuamasaga_matu_id + 4;
        $content['parent_id'] = $this->tuamasaga_matu_id;
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
        $content['parent_id'] = $this->tuamasaga_matu_id;
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
        $content['parent_id'] = $this->tuamasaga_matu_id;
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
        $content['parent_id'] = $this->tuamasaga_matu_id;
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
        $content['parent_id'] = $this->tuamasaga_matu_id;
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
        $content['id'] = $this->tuamasaga_matu_id + 8;
        $content['parent_id'] = $this->tuamasaga_matu_id;
        $content['name'] = "Saleimoa";
        $content['content'][] = ["Saleimoa (Faalupega aoao tetele)" => [
            "Afio mai aiga e tolu (Pulatele, Tilialo, Luatuanuu)",
            "Maliu mai Luatua ma lou Gautaala",
            "Mamalu mai oe le Faletolu"]];

        $content['content'][] = ["Levi" => [
            "Susu mai alo o Malietoa (Sapa'u, Lei'ata'atimu)",
            "Afio mai le aiga Sa Tilialo",
            "Maliu mai Luatua ma le Gautaala ma Upu ia te oe le Faletolu"]];

        $content['content'][] = ["Lotoso'a" => [
            "Afio mai alo o Sina (Patea, Futialo)",
            "Afio mai Nonumalo, o oe o le Maopu tasi i le aiga Sa Tilialo, o oe foi o le tama a le Malo",
            "Maliu mai Luatua ma le Gautaala ma Upu ia te oe le Faletolu"]];

        $content['content'][] = ["Nono'a" => [
            "Afio mai le sao o le aiga Sa Tilialo,o lau Afioga Tilialo",
            "Afio mai le matua o le aiga Sa Tilialo (Toalepai)",
            "Maliu mai Luatua ma le Gautaala ma Upu ia te oe le Faletolu"]];

        $content['content'][] = ["Salepoua'e" => [
            "Susu ai Pulatele o le Toetaufanua",
            "Susu mai Maopu ma Usoalii (Maopu o Faalogou ma Taituave)",
            "Maliu mai Luatua ma le Gautaala ma le Faletolu"]];

        $content['content'][] = ["Tufulele" => [
            "Susu mai Luatuanuu",
            "Afio mai le Maopu o Matiu (o ia foi o le aloalii) (Galumalemana)",
            "Afio mai le Usoalii (Faletaua'i, Faaootoa)",
            "Maliu mai oe le Siufanua"]];

        $content['content'][] = ["Malaefono" => ["Lotoso'a - Afifio ai le aiga Sa Tilialo"]];
        return $content;
    }

    // A'ana
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
    
    function getFalealili() {

        $content = [];
        $content['id'] = $this->atua_id + 1;
        $content['parent_id'] = $this->atua_id;
        $content['name'] = "Falealili";
        $content['content'][] = ["Falealili" => [
            "Afio mai Alalagafa, ma le la nofo o Tulafale, faapea fo'i le Tauãga eseese ia te oe Falealili"]];

        $content['content'][] = ["Sãga (Saleilua, Poutasi, Vaovai, Matautu)" => [
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
        
        $content['content'][] = ["Tafatafa" => [
            "Susu mai oulua Suafa o Salea ma Sa'oleititi",
            "Afio mai oe le Matua o lau Afioga Alaimoana",
            "Maliu mai Sa Alaimoana, faapea le mamalu ia te oe Falealili"]];
        
        $content['content'][] = ["Matavai" => [
            "Susu mai oulua Suafa o Taito ma Ula",
            "Maliu mai oe Tala'olefale, o lau Tofa Falaila ma le Lautinalaulelei ia te oe Falealili"]];
        
        $content['content'][] = ["Malaemalu" => [
            "Susu mai Pulotu o le alo o Tuatagaloa",
            "Maliu mai le Alii o aiga, o lau tofa Talauega",
            "Maliu mai le Anofale ma ou Manū, faapea upu ia te oe Falealili"]];
        
        $content['content'][] = ["Satalo" => [
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
        
        $content['content'][] = ["Faapuupuuga o Satalo" => [
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
}
