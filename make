<?php
$argv = $_SERVER["argv"];
array_shift($argv);

$comands = implode(" ",$argv);
echo  exec("vendor/bin/phinx ".$comands)."\n";