<?php

// namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Factory\Creational\AbstractFactory\HtmlFactory;
use App\Factory\Creational\AbstractFactory\HtmlText;
use App\Factory\Creational\AbstractFactory\JsonText;
use App\Factory\Creational\AbstractFactory\JsonFactory;

class AbstractFactoryTest extends TestCase {

	public function testCanCreateHtmlText()
	{
		$factory = new HtmlFactory();
		$text = $factory->createText('foobar');
		$this->assertInstanceOf(HtmlText::class, $text);
	}

	public function testCanCreateJsonText()
	{
		$factory = new JsonFactory();
		$text = $factory->createText('foobar');
		$this->assertInstanceOf(JsonText::class, $text);
	}
}