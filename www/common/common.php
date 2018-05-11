<?php 
error_reporting(0); 

$db_info['host']='localhost';
$db_info['database']='monster2jy';
$db_info['user']='monster2jy';
$db_info['password']='Phantom05!';

$db_connect=mysql_connect($db_info['host'],$db_info['user'],$db_info['password']) or die(mysql_error()); 
mysql_select_db($db_info['database']) or die('DB 선택 실패'); 

if(!$db_connect){ 
    echo '[연결실패] : '.mysql_error().'<br>';  
    die('MySQL 서버에 연결할 수 없습니다.'); 
}
?>