<?php

require_once('Calculator.php');

class CalculatorTest extends PHPUnit_Framework_Testcase {

	public $test;

	public function setup(){
		$this->test = new Calculator();
	}

	public function testAdd(){

		$value = $this->test->add(1,2);

		$this->assertTrue($value == 4);
	}

	public function testSubtract(){
		$value = $this->test->subtract(2,1);
		$this->assertEquals(1,$value);
	}
}