<?php

namespace frontend\widgets;

use yii\base\Widget;

/**
 * Class Header
 * @package frontend\widgets
 */
class Header extends Widget
{
  /**
   * @return string
   */
  public function run()
  {
    return $this->render('header');
  }
}