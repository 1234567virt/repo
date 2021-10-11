<?php
//header('Content-Type: text/html; charset= utf-8');
//setlocale(LC_ALL, "Russian_Russia.1251"); 
$text="Если ты будешь злиться на меня каждый раз, когда я делаю глупость, мне придется прекратить делать глупости";
$array = array(
	 'а', 'б',  'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 
	'и', 'й', 'к', 'л', 'м', 'н', 'о','п', 'р', 
	 'с',  'т', 'у',  'ф', 'х',  'ц', 'ч','ш', 'щ', 'ъ', 'ы',  'ь',  'э', 'ю',  'я'
);

$result=[];
function one($text,$array,$result=array()){
	$massiv=explode(' ',$text);
		for($i=0;count($massiv)>$i;$i++){
			$string=mb_substr($massiv[$i],0,1);
			$res=array_search(mb_strtolower($string),$array);
			$result[]=$array[$res];
		}
	return $result=array_unique($result);
}
//$results=one($text,$array,$result);
//print_r ($results);