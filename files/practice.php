<?php
$file = fopen(__DIR__ . '/file.txt', 'r');
while (!feof($file)) {
    echo fgets($file) . '<br>';
}
fclose($file);

echo '<hr>';



$data = file_get_contents(__DIR__ . '/file.txt');
echo nl2br($data);