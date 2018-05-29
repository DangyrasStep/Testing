<?php
/**
 * Created by PhpStorm.
 * User: dangis
 * Date: 18.5.24
 * Time: 16.17
 */

namespace App\Service;

class NumberFormatter
{
    /**
     * @param $number
     * @return string
     */
    public function formatNumber($number): String
    {
        $abs = abs($number);
        if ($number < 0) {

            $symbol = '-';
        } else {
            $symbol = '';
        }

        if ($abs >= 999500) {
            return $symbol . number_format(round($abs / 1000000, 2), 2) . 'M';
        }

        if ($abs >= 99950 && $abs < 999500) {
            return $symbol . number_format(round($abs / 1000, 0), 0) . 'K';
        }

        if ($abs >= 1000 && $abs < 99950) {
            return $symbol . number_format(round($abs, 0), 0, '', ' ');
        }
        
        if (round($abs, 0) === round($abs, 2)) {
            return $symbol . number_format(round($abs, 0), 0, '', ' ');
        }

        return $symbol . number_format(round($abs, 2), 2);
    }
}
