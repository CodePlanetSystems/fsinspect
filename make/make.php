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

$makeScriptPath = realpath($makeScriptPath);

if ($makeScriptPath === false || $makeScriptPath === null) {
    print "Aborting build, script path was invalid " . $makeScriptPath . PHP_EOL;
    print PHP_EOL;
    exit(1);
}

$mDir = realpath(dirname($makeScriptPath));
$rDir = realpath($mDir . "/..");
$sDir = realpath($rDir . "/src");
$bDir = realpath($rDir . "/build");




//$makeDirectory = dirname($makeScriptPath);
//$rootDirectory =


