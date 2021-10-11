<?php 
// https://www.codewars.com/kata/598ab63c7367483c890000f4

function string_task(string $s, $res = [], $ret = []): string {
  $let = array("A", "O", "Y", "E", "U", "I", 'a', 'o', 'y', 'e', 'u', 'i');
  for($i=0;$i<strlen($s);$i++){
    if(array_search($s[$i], $let) === false) $res[] = $s[$i];
  }
  foreach($res as $value) $ret[] = '.'.strtolower($value);
  return implode($ret);
}
?>