<?php

class user
{
    public $name = null;
function __construct($name){
$this-> name=$name;
}
    function __destruct(){
        echo "hello";
        echo "</br>";

    }
}
$arif=new user('arif');

$arifa=new user('arifa');

//$arif->name='arif';
//echo $arif->name;
//echo "</br>";
//$arifa=new user();

var_dump($arif);
echo "</br>";
var_dump($arifa);
echo "</br>";