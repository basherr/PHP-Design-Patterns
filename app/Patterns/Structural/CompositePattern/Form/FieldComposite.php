<?php namespace App\Patterns\Structural\CompositePattern\Form;

abstract class FieldComposite extends AbstractFormField {
  protected $fields = [];

  public function add(AbstractFormField $field)
  {
    $this->fields[$field->getName()] = $field;
  }

  public function remove(AbstractFormField $field)
  {
    $this->fields = array_filter($this->fields, function($item) use ($field) {
      return $item != $field;
    });
  }

  public function setData($data): void
  {
    foreach($this->fields as $name => $field) {
      if(isset($data[$name])) {
        $field->setData($name);
      }
    }
  }

  public function getData(): array
  {
    $data = [];
    foreach($this->fields as $name => $field) {
      $data[$name] = $field->getData();
    }
    return $data;
  }

  public function render(): string
  {
    $output = '';

    foreach($this->fields as $field) {
      $output .= $field->render();
    }
    return $output;
  }
}