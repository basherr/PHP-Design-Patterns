<?php

use PHPUnit\Framework\TestCase;

use \App\Patterns\Structural\CompositePattern\Form\{
  Form,
  InputField,
  Fieldset
};

class CompositePatternTest extends TestCase
{
  public function testCanCreateADynamicForm()
  {
    $form = new Form('users', 'Signup Form', 'http://localhost');
    $form->add(new InputField('first_name', 'First Name', 'text'));
    $form->add(new InputField('last_name', 'Last Name', 'text'));

    $fieldSet = new Fieldset('login-details', 'Credentials');
    $fieldSet->add(new InputField('email', 'Email', 'email'));
    $fieldSet->add(new InputField('Password', 'password', 'password'));

    $form->add($fieldSet);
    $this->assertStringContainsStringIgnoringCase('<input type="text" name="first_name" value="" />', $form->render());
  }
}