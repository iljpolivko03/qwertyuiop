<<<<<<< HEAD
<?php
require 'vendor/autoload.php';
require 'Cat.php';
$app = new \atk4\ui\App("Добро пожаловать в якобы игру");
$app->initLayout("Centered");
/*
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

$button= $app->add(['Button','index2']);
$button->link('index2.php');
$button->addClass('medium green');

$text=$app->add(['Text','Here can be text']);
$text->addParagraph('Text');

$a= 0;
  if ($a==0) {
    $name='Верно!';
  }else{
    $name='Неверно!';
  }

$label=$app->add(['Label',$name]);
$label->addClass('medium green');

$a= 0;
  if ($a>0) {
    $name='Верно!';
    $color='green';

  }else{
    $name='Неверно!';
    $color='red';

  }

$label=$app->add(['Label',$name]);
$label->addClass($color);

$a= 0;
  if ($a<0) {
    $name='Верно!';
    $color='green';
  }else{
    $name='Неверно!';
    $color='red';
  }

$label=$app->add(['Label',$name]);
$label->addClass($color);

$a= 0;
  if ($a>=0) {
    $name='Верно!';
    $color='green';
  }else{
    $name='Неверно!';
    $color='red';
  }

$label=$app->add(['Label',$name]);
$label->addClass($color);

$a= 0;
  if ($a<=0) {
    $name='Верно!';
    $color='green';
  }else{
    $name='Неверно!';
    $color='red';
  }

$label=$app->add(['Label',$name]);
$label->addClass($color);

$a= tesst;
  if ($a=='test') {
    $name='Верно!';
    $color='green';
  }else{
    $name='Неверно!';
    $color='red';
  }

$label=$app->add(['Label',$name]);
$label->addClass($color);

$a= 0;
  if ($a!=0) {
    $name='Верно!';
    $color='green';
  }else{
    $name='Неверно!';
    $color='red';
  }

$label=$app->add(['Label',$name]);
$label->addClass($color);


$button=$app->add('Button');
$button->set('КНОПКА');
$button->link(['index3','name'=>'Ilja','surname'=>'Polivko']);

$button1=$app->add(['Label','1']);
$button2=$app->add(['Label','2']);
$button3=$app->add(['Label','3']);
$button1=$app->add('Button');

  $text=$app->add(['Text','Чтобы начать игру нажмите кнопку']);
  $button=$app->add(['Button']);
  $button->set('Играть');
  $button->link(['index3','min'=>1,'max'=>100]);
  $button->addClass('blue');



$cat1=new Cat;
$cat1->name='Barsik';
$cat1->color='Grey';
$cat1->sex='Boy';
$cat1->age='10';
$cat1->AgeCheck();
$label=$app->add(['Label',$cat1->name.' '.$answer]);

$cat2=new Cat;
$cat2->name='Vasja';
$cat2->color='White';
$cat2->sex='Boy';
$cat2->age='25';
$cat2->AgeCheck();
$label=$app->add(['Label',$cat1->name.' '.$answer]);

$cat3=new Cat;
$cat3->name='Murka';
$cat3->color='Brown';
$cat3->sex='Girl';
$cat3->age='8';
$cat3->AgeCheck();
$label=$app->add(['Label',$cat1->name.' '.$answer]);

$cat4=new Cat;
$cat4->name='Car';
$cat4->color='Black';
$cat4->sex='Boy';
$cat4->age='11';
$cat4->AgeCheck();
$label=$app->add(['Label',$cat1->name.' '.$answer]);

$cat5=new Cat;
$cat5->name='Taison';
$cat5->color='Grey';
$cat5->sex='Boy';
$cat5->age='6';
$cat5->AgeCheck();
$label=$app->add(['Label',$cat1->name.' '.$answer]);

*/
$sweet1=new Sweet;
$sweet1->name='Vaverīte';
$sweet1->color='Green';
$sweet1->price='7';

$sweet2=new Sweet;
$sweet2->name='Lukss';
$sweet2->color='Brown';
$sweet2->price='9';

$sweet3= new Sweet;
$sweet3->name='Laciši';
$sweet3->color='Teal';
$sweet3->price='5';

$sweet4= new Sweet;
$sweet4->name='Serenade';
$sweet4->color='Blue';
$sweet->price='8';
=======
<?php
require 'vendor/autoload.php';
require 'Cat.php';
$app = new \atk4\ui\App("Добро пожаловать в якобы игру");
$app->initLayout("Centered");
/*
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

$button= $app->add(['Button','index2']);
$button->link('index2.php');
$button->addClass('medium green');

$text=$app->add(['Text','Here can be text']);
$text->addParagraph('Text');

$a= 0;
  if ($a==0) {
    $name='Верно!';
  }else{
    $name='Неверно!';
  }

$label=$app->add(['Label',$name]);
$label->addClass('medium green');

$a= 0;
  if ($a>0) {
    $name='Верно!';
    $color='green';

  }else{
    $name='Неверно!';
    $color='red';

  }

$label=$app->add(['Label',$name]);
$label->addClass($color);

$a= 0;
  if ($a<0) {
    $name='Верно!';
    $color='green';
  }else{
    $name='Неверно!';
    $color='red';
  }

$label=$app->add(['Label',$name]);
$label->addClass($color);

$a= 0;
  if ($a>=0) {
    $name='Верно!';
    $color='green';
  }else{
    $name='Неверно!';
    $color='red';
  }

$label=$app->add(['Label',$name]);
$label->addClass($color);

$a= 0;
  if ($a<=0) {
    $name='Верно!';
    $color='green';
  }else{
    $name='Неверно!';
    $color='red';
  }

$label=$app->add(['Label',$name]);
$label->addClass($color);

$a= tesst;
  if ($a=='test') {
    $name='Верно!';
    $color='green';
  }else{
    $name='Неверно!';
    $color='red';
  }

$label=$app->add(['Label',$name]);
$label->addClass($color);

$a= 0;
  if ($a!=0) {
    $name='Верно!';
    $color='green';
  }else{
    $name='Неверно!';
    $color='red';
  }

$label=$app->add(['Label',$name]);
$label->addClass($color);


$button=$app->add('Button');
$button->set('КНОПКА');
$button->link(['index3','name'=>'Ilja','surname'=>'Polivko']);

$button1=$app->add(['Label','1']);
$button2=$app->add(['Label','2']);
$button3=$app->add(['Label','3']);
$button1=$app->add('Button');

  $text=$app->add(['Text','Чтобы начать игру нажмите кнопку']);
  $button=$app->add(['Button']);
  $button->set('Играть');
  $button->link(['index3','min'=>1,'max'=>100]);
  $button->addClass('blue');
*/

$cat1=new Cat;
$cat1->name='Barsik';
$cat1->color='Grey';
$cat1->sex='Boy';
$cat1->age='10';
$cat1->AgeCheck();
$label=$app->add(['Label',$cat1->name.' '.$answer]);

$cat2=new Cat;
$cat2->name='Vasja';
$cat2->color='White';
$cat2->sex='Boy';
$cat2->age='25';
$cat2->AgeCheck();
$label=$app->add(['Label',$cat1->name.' '.$answer]);

$cat3=new Cat;
$cat3->name='Murka';
$cat3->color='Brown';
$cat3->sex='Girl';
$cat3->age='8';
$cat3->AgeCheck();
$label=$app->add(['Label',$cat1->name.' '.$answer]);

$cat4=new Cat;
$cat4->name='Car';
$cat4->color='Black';
$cat4->sex='Boy';
$cat4->age='11';
$cat4->AgeCheck();
$label=$app->add(['Label',$cat1->name.' '.$answer]);

$cat5=new Cat;
$cat5->name='Taison';
$cat5->color='Grey';
$cat5->sex='Boy';
$cat5->age='6';
$cat5->AgeCheck();
$label=$app->add(['Label',$cat1->name.' '.$answer]);
>>>>>>> 31c063029514ccc9a379c610328808d4240e7021
