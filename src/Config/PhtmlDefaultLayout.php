<?php
/**
 * Created by PhpStorm.
 * User: gde
 * Date: 26/03/2018
 * Time: 16:17
 */

namespace ObjectivePHP\Middleware\Action\PhtmlAction\Config;

use ObjectivePHP\Config\Directive\AbstractScalarDirective;

/**
 * Class PhtmlLayoutDefault
 *
 * @package ObjectivePHP\Middleware\Action\PhtmlAction\Config
 */
class PhtmlDefaultLayout extends AbstractScalarDirective
{
    const KEY = 'phtml.layout.default';

    /**
     * @var string
     */
    protected $key = self::KEY;
}