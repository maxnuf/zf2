<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_Form
 */

namespace ZendTest\Form\TestAsset\Annotation;

use Zend\Form\Annotation;

/**
 * @Annotation\Type("ZendTest\Form\TestAsset\Annotation\Form")
 */
class TypedEntity
{
    /**
     * @Annotation\Type("ZendTest\Form\TestAsset\Annotation\Element")
     * @Annotation\Name("typed_element")
     */
    public $typedElement;
}
