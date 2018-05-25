<?php
/**
 * Created by PhpStorm.
 * User: dangis
 * Date: 18.5.24
 * Time: 16.18
 */

namespace App\Tests\Service;

use App\Service\NumberFormatter;
use PHPUnit\Framework\TestCase;

class NumberFormatterTest extends TestCase
{
    /**
     * @return array
     */
    public function getFormatterData() : array
    {
        return [
            ['2835779', '2.84M'],
            ['999500', '1.00M'],
            ['535216', '535K'],
            ['99950', '100K'],
            ['27533.78', '27 534'],
            ['999.99', '999.99'],
            ['999.9999', '1 000'],
            ['533.1', '533.10'],
            ['66.6666', '66.67'],
            ['12.00', '12'],
            ['123654.89 ', '124K'],
            ['0', '0'],
            ['-2835779', '-2.84M'],
            ['-999500', '-1.00M'],
            ['-535216', '-535K'],
            ['-99950', '-100K'],
            ['-27533.78', '-27 534'],
            ['-999.99', '-999.99'],
            ['-999.9999', '-1 000'],
            ['-533.1', '-533.10'],
            ['-66.6666', '-66.67'],
            ['-12.00', '-12'],
            ['3', '3'],
            ['-3', '-3']
        ];
    }

    /**
     * @param $number
     * @param $expected
     * @dataProvider getFormatterData
     */
    public function testFormatter($number, $expected)
    {
        $converter = new NumberFormatter();
        $result = $converter->formatNumber($number);
        $this->assertEquals($expected, $result);
    }
}