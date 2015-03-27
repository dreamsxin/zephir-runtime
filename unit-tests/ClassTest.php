<?php

class ClassTest extends PHPUnit_Framework_TestCase
{

	public function __construct()
	{
		spl_autoload_register(array($this, '_autoloader'));
	}

	public function __destruct()
	{
		spl_autoload_unregister(array($this, '_autoloader'));
	}

	public function _autoloader($className)
	{
		if (file_exists('unit-tests/zep/'.$className.'.zep')) {
			require 'unit-tests/zep/'.$className.'.zep';
		}
	}

	public function testMath() {
		$this->assertTrue(class_exists('Math'));
		$this->assertEquals(Math::add(1, 2), 3);
	}
}



