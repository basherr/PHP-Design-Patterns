<?php namespace App\Factory\Structural\CompositePattern\Form;

abstract class AbstractFormField {
  protected $name;
  protected $title;
  protected $data;

  public function __construct(string $name, string $title)
  {
    $this->name = $name;
    $this->title = $title;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setData($data): void
  {
    $this->data = $data; 
  }

  public function getData(): array
  {
    return $this->data;
  }

  public abstract function render(): string;
}