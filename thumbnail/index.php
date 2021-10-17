<?php
    $jpg = imagecreatefromjpeg('img/original.jpg');
    $originalWidth = imagesx($jpg);
    $originalHeight = imagesy($jpg);

    $desiredSize = 300;


?>
<html lang="de">
<body>
<figure>
    <img src="img/original.jpg" alt="original"/>
    <figcaption>Witdh <?php echo $originalWidth?> - Height <?php echo $originalHeight?></figcaption>
</figure>
</body>
</html>
