<?php namespace App\Factory\Structural\CompositePattern\Form;

class Form extends FieldComposite
{
  private $url;

  public function __construct($name, $title, $url)
  {
    $this->url = $url;
    parent::__construct($name, $title);
  }

  public function render(): string
  {
    $output = parent::render();
    return "<form url=\"{$this->url}\"><h3>{$this->title}</h3>{$output}</form>";
  }
}