<?php namespace App\Factory\Structural\CompositePattern\Form;

class Fieldset extends FieldComposite
{
  public function render(): string
  {
    $output = parent::render();
    return "<fieldset><legend>{$this->title}</legend>\n{$output}</fieldset>";
  }
}