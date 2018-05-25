<?php
/**
 * Created by PhpStorm.
 * User: dangis
 * Date: 18.5.24
 * Time: 16.18
 */

namespace App\Tests\Service;

use App\Service\MoneyFormatter;
use App\Service\NumberFormatter;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class MoneyFormatterTest extends TestCase
{
    /**
     * @throws \ReflectionException
     */
    public function testFormatEur()
    {
        /**
         * @var NumberFormatter|MockObject $numberFormatter
         */
        $numberFormatter = $this->createMock(NumberFormatter::class);
        $numberFormatter->expects($this->any())
            ->method('formatNumber')
            ->with(123654.89)
            ->willReturn('124K');

        $moneyFormatterEur = New MoneyFormatter($numberFormatter);
        $this->assertEquals('124K €', $moneyFormatterEur->formatEur(123654.89));
    }

    /**
     * @throws \ReflectionException
     */
    public function testFormatUsd()
    {
        /**
         * @var NumberFormatter|MockObject $numberFormatter
         */
        $numberFormatter = $this->createMock(NumberFormatter::class);
        $numberFormatter->expects($this->any())
            ->method('formatNumber')
            ->with(123654.89)
            ->willReturn('124K');

        $moneyFormatterEur = New MoneyFormatter($numberFormatter);
        $this->assertEquals('$124K', $moneyFormatterEur->formatUsd(123654.89));
    }
}