<html>
<body>
    <?php 
    function create_thumbnail($path){
        $file=file_get_contents($path);
        $og_img=imagecreatefromstring($file);
        $width=imagesx($og_img);
        $height=imagesy($og_img);
        $thumbwidth=$width/7;
        $thumbheight=$height/7;
        $thumbnail=imagecreatetruecolor($thumbwidth, $thumbheight);
        imagecopyresampled($thumbnail, $og_img, 0,0,0,0,$thumbwidth, $thumbheight, $width,$height);
        imagejpeg($thumbnail,'thumb.jpg');
        imagedestroy($thumbnail);
    }
    create_thumbnail('download.jpg');
    ?>
    <img src="thumb.jpg">
</body>
</html>
