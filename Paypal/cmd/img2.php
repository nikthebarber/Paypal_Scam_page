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
$wrap = $_GET['wrap'];
$font="../css/".$font.".ttf";
$image_height = 10;


$arrText=explode("\n",wordwrap($text,$wrap,"\n"));
$bbox = imagettfbbox($font_size, 0, $font, $text);
$image = @imagecreate($wrap*($font_size/1.6), count($arrText)*$font_size*1.8);

$b=explode('-',$_GET['bkg']);
$c=explode('-',$_GET['color']);

$back = imagecolorallocate($image, $b[0], $b[1], $b[2]);



$y=5; //vertical position of text
foreach($arrText as $arr)
{
  $text_color = imagecolorallocate($image, $c[0], $c[1], $c[2]);
  imagecolortransparent($image, $back);
imagettftext($image, $font_size, 0, 0, $y+$font_size, $text_color, $font, trim($arr));
  $y=$y+($font_size*1.7);
 
}



imagepng($image);



/*
*$text='The quick brown fox was so long but it still jumped over the lazy dog.';
$arrText=explode("\n",wordwrap($text,20,"\n"));
 
$im = @imagecreate(300, 150); //creates an image
$background_color = imagecolorallocate($im, 0, 0, 0); //sets image background color
$y=5; //vertical position of text
foreach($arrText as $arr)
{
  $white=imagecolorallocate($im,255,255,255); //sets text color
  imagestring($im,5,15,$y,trim($arr),$white); //create the text string for image,added trim() to remove unwanted chars
  $y=$y+15;
 
}
header("Content-type: image/png");
imagepng($im);
imagedestroy($im);
*/

?>