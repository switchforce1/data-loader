<?php
/**
 * Created by PhpStorm.
 * User: Dadja
 * Date: 12/06/2020
 * Time: 02:44
 */

namespace Swichforce1\DataLoaderBundle\Exception;


use Throwable;

class DataWriteException extends \Exception
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
