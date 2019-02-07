<?php 
$im = @imagecreate(110, 20)
    or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($im, 1, 1, 1);
$text_color = imagecolorallocate($im, 255, 114, 291);
imagestring($im, 5, 5, 2.5,  "POKAJI JPEG", $text_color);
imagepng($im);
imagedestroy($im);

?>