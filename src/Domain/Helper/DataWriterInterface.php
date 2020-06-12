<?php
/**
 * Created by PhpStorm.
 * User: Dadja
 * Date: 12/06/2020
 * Time: 02:03
 */

namespace App\Domain\Helper;

/**
 * Interface DataWriterInterface
 * @package App\Domain\Helper
 */
interface DataWriterInterface
{
    const DEFAULT_OPTIONS = [
        'append' => false,
        'exist_on_first_error' => true,
    ];

    /**
     * @param array $data
     * @param array $options
     * @return array
     */
    public function writeData(array $data, array $options = []): array;

    /**
     * @param array $options
     * @return array [errors]
     */
    public function checkWriteOptions(array $options): array;
}
