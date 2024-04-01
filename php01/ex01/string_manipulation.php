<?php
declare(strict_types=1);

function mainpulation(string $phrase) : string {
    $words = explode(' ', $phrase);
    $reversedWords = array_reverse($words);
    return implode(' ', $reversedWords);
}

$phrase = 'Salut à tous !';
echo "Phrase initial: $phrase\n";
$reversedPhrase = mainpulation($phrase);
echo "Phrase inversé: $reversedPhrase\n";