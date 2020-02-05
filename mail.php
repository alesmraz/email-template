<?php

$a = file_get_contents(__DIR__ . '/index.html');
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: alesmraz@email.cz' . "\r\n";

echo mail('pfulin@outlook.cz', 'test outlook', $a, $headers);

ppf@outlook.cz
outlookheslo1