<?php
/**
 * Created by PhpStorm.
 * User: Dadja
 * Date: 12/06/2020
 * Time: 02:23
 */

namespace App\Infrastructure\Helper;


use App\Domain\Helper\DataReaderInterface;

class CsvHelper implements DataReaderInterface
{

    /**
     * @param array $options
     * @throws \Exception when error occured
     * @return array [empty if no data readed]
     */
    public function readData(array $options): array
    {
        $filePath = $options['file_path'];
        $limit = $options['limit'];
        $delimiter = $options['delimiter'];
        $data = [];
        $row = 1;
        if (($handle = fopen($filePath, "r")) !== FALSE) {
            while (($lineData = fgetcsv($handle, $limit, $delimiter)) !== FALSE) {
                $data[] = $lineData;
                $row++;
            }
            fclose($handle);
        }else{
            throw new \Exception("Impossible de lire dans le fichier : ".$filePath);
        }
        return $data;
    }

    public function checkReadOptions(array $options): array
    {
        return [];
    }
}
