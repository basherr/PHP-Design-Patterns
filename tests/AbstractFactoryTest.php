<?php

// namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Patterns\Creational\AbstractFactory\HtmlFactory;
use App\Patterns\Creational\AbstractFactory\HtmlText;
use App\Patterns\Creational\AbstractFactory\JsonText;
use App\Patterns\Creational\AbstractFactory\JsonFactory;

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