<?php
/**
 * Created by PhpStorm.
 * User: dangis
 * Date: 18.5.24
 * Time: 16.17
 */

namespace App\Service;

class MoneyFormatter
{
    /**
     * @var NumberFormatter
     */
    private $numberFormatter;

    /**
     * MoneyFormatter constructor.
     * @param NumberFormatter $numberFormatter
     */
    public function __construct(NumberFormatter $numberFormatter)
    {
        $this->numberFormatter = $numberFormatter;
    }

    /**
     * @param $number
     * @return string
     */
    public function formatEur($number) : String
    {
        return $this->numberFormatter->formatNumber($number) . ' €';
    }

    /**
     * @param $number
     * @return string
     */
    public function formatUsd($number) : String
    {
        return '$' . $this->numberFormatter->formatNumber($number);
    }
}