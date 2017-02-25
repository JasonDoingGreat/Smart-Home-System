<?php
$result=random(10);
echo "<input type='text' size='20' value='{$result}'>";
function random($length, $chars = '0123456789'){
$hash = '';
$max = strlen($chars)-1;
for($i=0; $i<$length; $i++){
$hash .= $chars[mt_rand(0, $max)];
}
return $hash;
}
?>
