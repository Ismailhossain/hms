<?php

define(base_url,'http://hms.ismailhossain.me/');



function connection(){
$db['host'] = 'localhost';
$db['user'] = 'ismail_hms';
$db['pass'] = '09876';
$db['name'] = 'ismail_hms';
mysql_connect($db['host'], $db['user'], $db['pass']);
mysql_select_db($db['name']);
}
connection();




