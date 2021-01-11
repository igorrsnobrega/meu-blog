<?php

//criando class de conexao
class Conexao{

    //public static $instance;

    public function __construct(){
        //
    }

    public static function getConection(){
        try{
            //preparando modulo PDO
            defined('HOST')   or define('HOST', 'localhost');//45.34.12.248 - localhost
            defined('USER')   or define('USER', 'root');//igornobrega - root
            defined('PASS')   or define('PASS', '');//7131@Eve
            defined('DBNAME') or define('DBNAME', 'igornobrega');//igornobrega
            
            $instance = new PDO('mysql:host='.HOST.'; dbname='.DBNAME.';', USER, PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        }catch(PDOException $ex){
            echo 'error: '. $ex->getMessage();
        }  
        return $instance;
    }

}