<?php

namespace App\Expression;

use App\Expression\Interfaces\ExpressionInterface;
use App\Context\Context;

class ColorExpression implements ExpressionInterface {

  public function parse(Context $context) {
    switch($context->getCommand()) {
      case 'red':
        echo '<span style="color: red;">red</span>';
        break;
      case 'blue':
        echo '<span style="color: blue;">blue</span>';
        break;
      case 'yellow':
        echo '<span style="color: yellow;">yellow</span>';
        break;
    }
  }
}