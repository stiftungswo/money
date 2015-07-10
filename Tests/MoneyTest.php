<?php
/**
 * Author: Till Wegmüller
 * Date: 7/10/15
 * Dime
 */

namespace Money\Tests;


use Money\Currency;
use Money\Money;

class MoneyTest extends \PHPUnit_Framework_TestCase
{
	public function testRun()
	{
		$floatAmount    = 32.41;
		$money          = new Money($floatAmount, new Currency('CHF'));
		$fourtimesmoney = $money->multiply(4);

		$this->assertEquals(3240, $money->getAmount());
		$this->assertInternalType('integer', $money->getAmount());
		$this->assertEquals(12960, $fourtimesmoney->getAmount());
		$this->assertEquals($money->getAmount(), $fourtimesmoney->divide(4)->getAmount());
		$this->assertEquals($fourtimesmoney->add($money)->getAmount(), 16200);
	}
}