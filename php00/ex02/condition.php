<?php
declare(strict_types=1);

$nombre = mt_rand(1, 10);
if (in_array($nombre, [1, 3, 5, 7, 9])) {
    echo "Le nombre $nombre est impair";
} else {
    echo "Le nombre $nombre est pair";
}