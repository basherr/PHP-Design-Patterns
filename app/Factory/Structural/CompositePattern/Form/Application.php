<?php namespace App\Factory\Structural\CompositePattern\Form;

class Application
{

  public function run()
  {
    $product = $this->createProductForm();
    $this->loadProductData($product);
    $this->renderProduct($product);
  }

  public function createProductForm()
  {
    $form = new Form('product', 'Add Product', 'product/add');
    $form->add(new InputField('name', 'Name', 'text'));
    $form->add(new InputField('description', 'description', 'text'));

    $fieldset = new Fieldset('photo', 'Product Photo');
    $fieldset->add(new InputField('caption', 'Caption', 'text'));
    $fieldset->add(new InputField('image', 'Image', 'file'));

    $form->add($fieldset);

    return $form;
  }

  public function loadProductData(AbstractFormField $form)
  {
    $data = [
      'name' => 'Apple MacBook',
      'description' => 'A decent laptop',
      'photo' => [
        'caption' => 'Front Photo',
        'image' => 'photo1.jpg'
      ]
    ];
    $form->setData($data);
  }

  public function renderProduct(AbstractFormField $form)
  {
    echo $form->render();
  }
}