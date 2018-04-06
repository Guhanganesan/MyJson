<?php
class foo {
    public $name;
}

mysql_connect("localhost", "root", "");
mysql_select_db("payilagam");

$result = mysql_query("select name from data limit 2");
$obj = mysql_fetch_object($result, 'foo');
var_dump($obj);
?>