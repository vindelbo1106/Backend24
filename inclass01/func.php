<?php
$functions = get_defined_functions();
echo count($functions['internal']);

$intfuncs = $functions['internal'];
foreach ($intfuncs as $function) {
    echo $function . "<br>";
}