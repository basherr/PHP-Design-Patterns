<?php namespace App\Factory\Structural\CompositePattern\Form;

class InputField extends AbstractFormField {
  private $type;

  public function __construct(string $name, string $title, string $type)
  {
    $this->type = $type;
    parent::__construct($name, $title);
  }

  public function render(): string {
    return "<label type=\"{$this->name}\">{$this->title}</label>
      <input type=\"{$this->type}\" name=\"{$this->name}\" value=\"{$this->data}\" />";
  }
}