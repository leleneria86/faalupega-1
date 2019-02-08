<?php

/**
 * Created by PhpStorm.
 * User: leleneria
 * Date: 12/5/18
 * Time: 6:01 PM
 */

class DBUtil
{
    static public function getConnection()
    {

//        $db = 'faalupega';
//        $host = 'ulupoo.cf9ipebpt9sm.us-east-2.rds.amazonaws.com';
//        $username = 'leleneria';
//        $password = 'Fagaitua86';

        $db = 'test';
        $host = 'localhost';
        $username = 'root';
        $password = '';

        return new PDO("mysql:dbname=$db;host=$host", $username, $password);
    }
}
