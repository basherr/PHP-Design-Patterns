<?php

use PHPUnit\Framework\TestCase;

use \App\Factory\Behavioral\Command\ApiScrapper\Queue;
use \App\Factory\Behavioral\Command\ApiScrapper\KlookApiScrapper;
use \App\Factory\Behavioral\Command\ApiScrapper\HttpRequest;

class CommandTest extends TestCase {

	public function testCanCheckQueueEmptiness()
	{
    $queue = new Queue;

    $this->assertTrue($queue->isEmpty());
  }

  public function testCanAddNewCommandsToQueue()
  {
    $queue = new Queue;

    $defaultCommand = new KlookApiScrapper(new \App\Factory\Behavioral\Command\ApiScrapper\JsonApiManager);
    $queue->add($defaultCommand);
    
    $command = $queue->getCommand();
    $this->assertEquals($defaultCommand->getStatus(), $command->getStatus());
  }

  public function testQueueCanExecuteCommands()
  {
    // TODO: following to be fixed

    // $apiManager = $this->getMockBuilder(HttpRequest::class)->getMock();

    // $apiManager->expects($this->once())
    //             ->method('get')
    //             ->will($this->returnCallback([$this, 'klookApiResponse']));

    
    // $queue = new Queue;
    // $queue->add(new KlookApiScrapper($apiManager));
    // $queue->work();
  }

  private function klookApiResponse()
  {
    $args = func_get_args();
    print_r($args);exit;
    return ['activities' => []];
  }

  public function testQueueCanCompleteCommand()
  {
    $queue = new Queue;

    $defaultCommand = new KlookApiScrapper(new \App\Factory\Behavioral\Command\ApiScrapper\JsonApiManager);
    $queue->add($defaultCommand);
    // complete the command
    $defaultCommand = $queue->getCommand();
    $defaultCommand->success();

    // get the command back again from the db
    $command = $queue->getCommand();
    $this->assertEquals($defaultCommand->getStatus(), $command->getStatus());
  }
}