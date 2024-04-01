<?php
declare(strict_types=1);

/**
 * @throws Exception
 */
function convertDateFormat(string $date, string $format) : string {
    $dateTime = new DateTime($date);
    return $dateTime->format($format);
}

$date = '2022-03-01';
$newFormat = 'd/m/Y';
echo "Date initiale: $date\n";
$convertedDate = convertDateFormat($date, $newFormat);
echo "Date convertie: $convertedDate\n";