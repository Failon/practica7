<?php
class Request{
  static private $query=array();
 
  static function retrieve(){
    $array_query=explode('/',$_SERVER['REQUEST_URI']);
    //Coder::code_var($array_query);
    array_shift($array_query);
    //Coder::code_var($array_query);
 
    if ((($array_query[0]==APP_W))||(substr_count(APP_W, $array_query[0])>0)){
      array_shift($array_query);
    }
       //l'últim element és ""
    if (end($array_query)==""){
        array_pop($array_query);
    }
    self::$query=$array_query;
    //Coder::code_var($array_query);
  }
  static function getCont(){
     return array_shift(self::$query);
  }
  static function getAct(){
     return array_shift(self::$query);
  }
  static function getParam(){
     //Els parametres i els valors han de ser parells
    if ((count(self::$query))%2==0){
         return self::$query;
    }
    else{
      echo 'ERRROR parameters and values must be odd!';
      exit;
    }
 }
 
}