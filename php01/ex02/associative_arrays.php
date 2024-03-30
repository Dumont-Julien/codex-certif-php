<?php
declare(strict_types=1);

function infos(string $prenom) : string {
    $array = [
        'Pierre' => [
            'nom' => 'Dutronc',
            'age' => 20
        ],
        'Paul' => [
            'nom' => 'Dellile',
            'age' => 10
        ],
        'Jacques' => [
            'nom' => 'Mercier',
            'age' => 5
        ]
    ];
    if(!isset($array[$prenom])) {
        return 'Personne inconnue.';
    }else {
        return "Voici les informations concernant $prenom: " . PHP_EOL .
            'Nom: ' . $array[$prenom]['nom'] . PHP_EOL .
            'Age: ' . $array[$prenom]['age'] . PHP_EOL;
    }
}
echo infos($argv[1]);