<?php

require_once 'vendor/autoload.php';

use App\Context\Context;
use App\Expression\BeginExpression;

// コマンド
$command = 'output blue yellow red /';

$expression = new BeginExpression();
$expression->parse(new Context($command));
