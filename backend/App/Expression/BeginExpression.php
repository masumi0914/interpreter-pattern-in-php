<?php

namespace App\Expression;

use App\Expression\Interfaces\ExpressionInterface;
use App\Context\Context;
use App\Expression\EndExpression;

class BeginExpression implements ExpressionInterface {

  public function parse(Context $context) {
    if($context->getCommand() != 'output') {
      throw new \Exception('begining expression not exist ');
    }
    $endExpression = new EndExpression();
    $endExpression->parse($context);
  }
}