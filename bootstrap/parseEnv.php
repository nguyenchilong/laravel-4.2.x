#!/usr/bin/php
<?php
// Read all lines from file
$htaccess = file('.htaccess');
foreach ($htaccess as $line) {
    // Trim left/right spaces, replace all repeated spaces by 1 space
    $line = preg_replace('/[ \t]+/', ' ', trim($line));
    // It's our variable defined with SetEnv
    if (substr($line, 0, 7) === 'SetEnv ') {
        $tmp = explode(' ', substr($line, 7), 2);
        $_ENV[$tmp[0]] = str_replace('"', '', $tmp[1]);
    }
}