<?php
exec("sudo rm -rf /var/www/image/*");
exec("sudo /root/camera");
$result=random(10);
exec("sudo convert /usr/image_bmp.bmp /var/www/image/image_{$result}.jpg");

function random($length, $chars = '0123456789'){
$hash = '';
$max = strlen($chars)-1;
for($i=0; $i<$length; $i++){
$hash .= $chars[mt_rand(0,$max)];
}
return $hash;
}
echo "/image/image_{$result}.jpg";
?>
