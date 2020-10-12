<?php
header('Content-type: image/png');
function odr($s,$v){
	$p=str_split($s);$t="";
	for($i=0;$i<count($p);$i++){
		$t.=chr(ord($p[$i])+$v);
	}
	return $t;
} 
$text = odr(base64_decode($_GET['text']),-3);
$font_size = $_GET['size'];
$font = $_GET['font'];
if(isset($_GET['top'])){
	$top = $_GET['top'];
}else{$top=0;}
$font="../css/".$font.".ttf";
$image_height = 10;

$bbox = imagettfbbox($font_size, 0, $font, $text);
$image = imagecreate($bbox[4]+$font_size/4,-$bbox[5]+$top+$font_size/2);

$b=explode('-',$_GET['bkg']);
$back = imagecolorallocate($image, $b[0], $b[1], $b[2]);

$c=explode('-',$_GET['color']);
$text_color = imagecolorallocate($image, $c[0], $c[1], $c[2]);

// Make the background transparent
imagecolortransparent($image, $back);

imagettftext($image, $font_size, 0, 0, -$bbox[5]+2+$top, $text_color, $font, $text);
imagepng($image);
?>