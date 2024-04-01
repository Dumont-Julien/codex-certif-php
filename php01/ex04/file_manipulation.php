<?php
declare(strict_types=1);

function modifyAndSaveFile(string $filename) : void {
    $content = file_get_contents($filename);
    $modifiedContent = str_replace(' ', '_', $content);
    $newFilename = 'modifier_' . $filename;
    file_put_contents($newFilename, $modifiedContent);
}
modifyAndSaveFile('example.txt');