PHP Face Detection with cropping coordinates
==================
This script is an extension of Maurice Svay's (https://github.com/mauricesvay/php-facedetection) php facial recognition script. A class was added to return the x and y coordinate and width (w) all in pixels from top left of an image. The returned values attempt to create the largest square image possible based on the input image centered on the face.

Requirements
------------
PHP5 with GD

Usage
-------
```
include("FaceDetector.php");
$faceDetect = new svay\FaceDetector('detection.dat');
$coords = $faceDetect->cropcoords('test1.jpg');
var_dump($coords);
```
Returns:
```
[Square image]
array(3) {
  ["y"]=>
  int(0)
  ["x"]=>
  int(0)
  ["w"]=>
  int(112)
}
```
OR 
```
[Portrait Image]
array(3) {
  ["x"]=>
  float(45.666666666665)
  ["y"]=>
  int(0)
  ["w"]=>
  int(274)
}
```

License
-------
GNU GPL v2 (See LICENSE.txt)
