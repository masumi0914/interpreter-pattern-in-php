<?php

namespace App\Expression;

use App\Expression\Interfaces\ExpressionInterface;
use App\Context\Context;
use App\Expression\ColorExpression;

class EndExpression implements ExpressionInterface {

  public function parse(Context $context) {
    while(true) {
      $text = $context->getCommand();
      if(is_null($text)) {
        throw new \Exception('end expression not exist.');
      } elseif($text == '/') {
        break;
      } else {
        $expression = new ColorExpression();
        $expression->parse($context);
      }
      $context->nextCommand();
    }
  }
}