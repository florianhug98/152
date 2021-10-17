<?php
    $jpg = imagecreatefromjpeg('img/original.jpg');
    $webp = imagewebp($jpg, 'img/new.webp', 60);
