<?php
header("Content-type: image/png");
$image = imagecreate(425,360);

$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);

imagerectangle($image, 5, 5, 105, 55, $black);
imagestring($image, 3, 25, 25, "Papa !", $black);

imagerectangle($image, 110, 5, 210, 55, $black);

imagerectangle($image, 215, 5, 315, 55, $black);

imagerectangle($image, 320, 5, 420, 55, $black);

/*--*/

imagerectangle($image, 55, 155, 160, 205, $black);

imagerectangle($image, 265, 155, 370, 205, $black);

/*--*/

imagerectangle($image, 160, 305, 265, 355, $black);

imagepng($image);
?>