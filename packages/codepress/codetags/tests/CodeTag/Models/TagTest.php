<?php

namespace CodePress\CodeTag\Tests\Models;

use CodePress\CodeTag\Tests\AbstractTestCase;

class TagTest extends AbstractTestCase
{
	public function setUp()
	{
		parent::setUp();
		$this->migrate();
	}

	public function test_check()
	{
		$this->assertTrue(true);
	}
}
