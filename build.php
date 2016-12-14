<?php

require_once __DIR__."/build/Build.php";

use cr\hashcli\Build;

$build = new Build();

$build->buildPhar();
