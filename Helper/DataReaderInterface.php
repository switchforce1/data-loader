<?php
/**
 * Created by PhpStorm.
 * User: Dadja
 * Date: 12/06/2020
 * Time: 02:03
 */

namespace Swichforce1\DataLoaderBundle\Helper;


interface DataReaderInterface
{
    /**
     * @param array $options
     * @throws \Exception when error occured
     * @return array [empty if no data readed]
     */
    public function readData(array $options): array;

    public function checkReadOptions(array $options): array;
}
