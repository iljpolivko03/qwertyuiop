<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App("Online shop");
$app->initLayout("Centered");
session_start();

$db=new
\atk4\data\Persistence_SQL('mysql:dbname=friends;host=localhost','root','');
class Friends extends \atk4\data\Model {
  public $table = 'friends';
  function init () {
    parent::init();
    $this->addField('name');
    $this->addField('surname');
    $this->addField('phone_number',['default'=>371]);
    $this->addField('email');
    $this->addField('birthday',['type'=>'date']);
    $this->addField('notes',['type'=>'text']);
    $this->addField('age');
 }
}

$form=$app->layout->add('Form');
$form->setModel(new Friends($db));
$form->onSubmit(function ($form) {
  $_SESSION['name'] = $form->model['name'];
  if($form->model['age']>14){
  $form->model->save();
  return new \atk4\ui\jsExpression('document.location="success.php" ');
  //return $form->success('Record updated');
}else{
//  return $form->error('Увы, ты не подходишь');
return new \atk4\ui\jsExpression('document.location="error.php" ');

}

});

$grid=$app->layout->add('Grid');
$grid->setModel(new Friends($db));

$crud=$app->layout->add('CRUD');
$crud->setModel(new Friends($db));
$crud->addQuickSearch(['name','surname']);
$button=$app->layout->add(['Button','Admin']);
$button->link(['check']);
