<?php

mysql_connect('localhost','root','root');
mysql_selectdb('zxd');
mysql_set_charset('utf8');
$result = array();
$result["state"] = 'success';

$sql=" SELECT * FROM user";
$rs = mysql_query($sql);

$items = array();
while($row = mysql_fetch_object($rs)){
    //    array_push($items, $row);
    $items[] = $row;
}
$result["data"] = $items;

echo json_encode($result);

