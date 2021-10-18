<?php
  $jpg = imagecreatefromjpeg('img/original.jpg');
  $width = imagesx($jpg);
  $height = imagesy($jpg);

  $desiredSize = 300;

  $wRatio = ($desiredSize / $width);
  $hRatio = ($desiredSize / $height);

  if ($width > $height){
    $wCropped = round($width * $hRatio);
    $hCropped = $desiredSize;
    $srcX = ceil(($width - $height) / 2);
    $srcY = 0;
  } else if ($width < $height) {
    $hCropped = round($height * $wRatio);
    $wCropped = $desiredSize;
    $srcY = ceil(($height - $width) / 2);
    $srcX = 0;
  }else {
    $wCropped = $desiredSize;
    $hCropped = $desiredSize;
    $srcX = 0;
    $srcY = 0;
  }

  $newImage = imagecreatetruecolor($desiredSize, $desiredSize);
  imagecopyresampled($newImage, $jpg, 0, 0, $srcX, $srcY, $wCropped, $hCropped, $width, $height);
  imagejpeg($newImage, 'img/new.jpg');

  imagedestroy($jpg);
  imagedestroy($newImage);
?>
<html lang="de">
<body>
<figure>
    <img src="img/original.jpg" alt="original"/>
    <figcaption>Witdh <?php echo $width?> - Height <?php echo $height?></figcaption>
</figure>
<figure>
  <img src="img/new.jpg" alt="new"/>
  <figcaption>Witdh <?php echo $desiredSize?> - Height <?php echo $desiredSize?></figcaption>
</figure>
</body>
</html>
