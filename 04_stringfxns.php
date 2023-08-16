<?php

//string fnxs

$str = 'The new Bank Ghana';
echo 'String lenth  ',strlen($str);

echo '<br/>First position or Occurance of a string <br/> ';
echo strpos($str,'a'),'<br/>';

echo ' Last position or Occurance of a string <br/>';
echo strrpos($str,'a'),'<br/>';

echo 'Reverse String <br/>';
echo strrev($str),'<br/>';

echo 'case conversion of string <br/>';
echo  strtolower($str),'<br/>';
echo  strtoupper($str),'<br/>';
echo  ucwords($str),'<br/>';

echo 'Show html code on page  <br/>';
$tags = '<h4>Welcome to php</h4>';
echo htmlspecialchars($tags)
?>