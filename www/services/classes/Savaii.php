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
        $ret[] = $this->getSalelologa();
        return $ret;
    }

    function getSalelologa() {

        $content = [];
        $content['id'] = 1;
        $content['parent_id'] = 200;
        $content['name'] = "Salelologa";
        $content['content'][] = ["Fa'alupega" => ["Afio mai Ti'a ma le aiga o Saluamanuvae ma la outou tama o Tinousi",
            "Susu mai Su'a ma le Aiga",
            "Susu mai le Fuaiala o le malelega a le Malietoa",
            "Maliu mai le Falefia ma le Falesalafai, na e lave i Manino lave i A'ava",
            "O le logo ga pule ma le Faitoaga",
            "Falefia (Taotua, Pipi, Matamua, ma Fonoia)",
            "Falesalafai (Seumanu, Pauli, Fiu)"]];
        $content['content'][] = ["Malaefono" => ["Malaefatu (Tua o Fiufatu)"]];
        return $content;
    }
}