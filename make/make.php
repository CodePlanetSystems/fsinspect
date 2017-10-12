<?php

print "FSINSPECT PHAR BUILDER" . PHP_EOL;
print PHP_EOL;

$makeScriptPath = getcwd() . '/' . $_SERVER["SCRIPT_FILENAME"];

if (file_exists($makeScriptPath) === false) {
    print "Aborting build, script path was invalid " . $makeScriptPath . PHP_EOL;
    print PHP_EOL;
    exit(1);
}

