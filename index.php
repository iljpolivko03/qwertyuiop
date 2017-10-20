<?php
echo "O privet";
require 'vendor/autoload.php';
$app = new \atk4\ui\App("Добро пожаловать");
$app->initLayout("Centered");

$button = $app->add('Button');
$button->set('YouTube');
$button->icon = 'Image';
$button->addClass('medium red');
$button->link('https://www.youtube.com/');

$button = $app->add('Button');
$button->set('Facebook');
$button->icon = 'Comments';
$button->addClass('medium blue');
$button->link('https://www.facebook.com/');

$button = $app->add('Button');
$button->set('Aliexpress');
$button->icon = 'Shopping Bag';
$button->addClass('medium orange');
$button->link('https://www.aliexpress.com');

$button= $app->add(['Button','Ilja']);
$button->link('index2.php');
$button->addClass('Massive Blue');

$text=$app->add(['Text','Here can be text']);
$text->addParagraph('Text');

$a= 3;
  if ($a>0) {
    echo'Верно!';
  }else{
    echo 'Неверно!';
  }
