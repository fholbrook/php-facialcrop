<?php
/**
 * Crop Coordinates for Profile Images
 * By Flint Holbrook
 * Facial Detection was orginally written by Maurice Svay (https://github.com/mauricesvay/php-facedetection) and adapted to return x, y, and width to crop a profile image to square
 * The script will return the coordinates then you can crop however you'd like with imagemagick or gd or other 
 * GNU GPL v2
 */

include("FaceDetector.php");
            $faceDetect = new svay\FaceDetector('detection.dat');
            $coords = $faceDetect->cropcoords('test3.jpg');
            var_dump($coords);

?>