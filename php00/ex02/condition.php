<?php
declare(strict_types=1);

$nombre = mt_rand(1, 10);
if ($nombre % 2) {
    echo "Le nombre $nombre est impair";
} else {
    echo "Le nombre $nombre est pair";
}