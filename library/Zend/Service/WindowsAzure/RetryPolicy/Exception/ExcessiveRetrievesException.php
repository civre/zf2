<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_Service_WindowsAzure
 */

namespace Zend\Service\WindowsAzure\RetryPolicy\Exception;

use Zend\Service\WindowsAzure\Exception;

/**
 * @category   Zend
 * @package    Zend_Service_WindowsAzure
 * @subpackage RetryPolicy
 */
class ExcessiveRetrievesException extends Exception\RuntimeException implements ExceptionInterface
{
}
