<?php namespace App\Commands;


class CreateTestFileCommand
{
  /**
  * new class to be created
  */
  private $_className;

  public function __construct(string $className)
  {
    $this->_className = ucfirst($className);
  }
  /**
  * create a test file
  *
  * @param null
  * @return void
  */
  public function handle()
  {
    $stub = file_get_contents(__DIR__ . '/../../stubs/Test.stub');
    $content = str_replace('class Test', 'class '. $this->_className, $stub);
    file_put_contents(__DIR__ . '/../../tests/' . $this->_className . '.php', $content);
    echo $this->_className . '.php File Created Succuessfully';
  }
}
