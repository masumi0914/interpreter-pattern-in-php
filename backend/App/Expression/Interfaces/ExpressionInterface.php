<?php

namespace App\Expression\Interfaces;

use App\Context\Context;

interface ExpressionInterface {
  public function parse(Context $context);
}