<?php

use PHPUnit\Framework\TestCase;

use \App\Patterns\Behavioral\Command\ApiScrapper\Queue;
use \App\Patterns\Behavioral\Command\ApiScrapper\KlookApiScrapper;
use \App\Patterns\Behavioral\Command\ApiScrapper\HttpRequest;
use App\Patterns\Behavioral\Command\ApiScrapper\AbstractApiScrapper;

class CommandTest extends TestCase {

	public function testCanCheckQueueEmptiness()
	{
    $queue = Queue::get();

    $this->assertTrue($queue->isEmpty());
  }

  public function testCanAddNewCommandsToQueue()
  {
    $queue = Queue::get();

    $defaultCommand = new KlookApiScrapper(new \App\Patterns\Behavioral\Command\ApiScrapper\JsonApiManager);
    $queue->add($defaultCommand);
    
    $command = $queue->getCommand();
    $this->assertEquals($defaultCommand->getStatus(), $command->getStatus());
  }

  public function testQueueCanCompleteCommand()
  {
    $queue = Queue::get();

    $defaultCommand = new KlookApiScrapper(new \App\Patterns\Behavioral\Command\ApiScrapper\JsonApiManager);
    $queue->add($defaultCommand);
    // complete the command
    $defaultCommand = $queue->getCommand();
    $defaultCommand->success();

    // get the command back again from the db
    $command = $queue->setStatus(AbstractApiScrapper::SUCCESS)->getCommand();
    $this->assertEquals(AbstractApiScrapper::SUCCESS, $command->getStatus());
  }
}