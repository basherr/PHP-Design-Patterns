<?php namespace App\Patterns\Creational\FactoryMethod\Logger;

class Application
{
    public function render()
    {
        $factory = new StdLoggerFactory;
        echo '<h1>Logging via StdLogger</h1>';
		$factory->createLogger()->log('Write this message to log');
        
        echo '<h1>Writing log to a file and reading from it</h1>';
		$file = __DIR__ . '/factory.txt';
		(new FileLoggerFactory($file))->createLogger()->log('This text to be written on a file');
		echo "<br/>". file_get_contents($file);
    }
}