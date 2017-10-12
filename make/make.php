<?php

print "FSINSPECT PHAR BUILDER" . PHP_EOL;
print PHP_EOL;

$makeScriptPath = getcwd() . '/' . $_SERVER["SCRIPT_FILENAME"];

if (file_exists($makeScriptPath) === false) {
    $makeScriptPath = $_SERVER["SCRIPT_FILENAME"];
    if (file_exists($makeScriptPath) === false) {
        print "Aborting build, script path was invalid " . $makeScriptPath . PHP_EOL;
        print PHP_EOL;
        exit(1);
    }
}

print $makeScriptPath . PHP_EOL;
print realpath($makeScriptPath) . PHP_EOL;


//$makeDirectory = dirname($makeScriptPath);
//$rootDirectory =


