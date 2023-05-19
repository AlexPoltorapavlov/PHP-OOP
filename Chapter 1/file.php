<?php  
$img = 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/ba/29/5c/img-worlds-of-adventure.jpg?w=1200&h=-1&s=1';
$img_width = 10; // width of the image in pixels  
$img_height = 10;// height of the image in pixels   
$png_quality=85;    	                        
        $compressedImage=$this->imageCompression($img, $img_width , $img_heigth,$png_quality); // function to compress png  
?> 
<div> <img src="{$compressedImage}" alt="" width="10" height="10"> </div><br/>
