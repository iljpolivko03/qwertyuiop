<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App("Online shop");
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


$sweet1=new Sweet;
$sweet1->name='Vaverīte';
$sweet1->color='green';
$sweet1->price='7';
$label=$app->add(['Label',$sweet1->name,$sweet1->color.' massive','detail'=>$sweet1->price,'image'=>'https://www.kontoriabi.ee/wp-content/uploads/2017/03/450-00381.jpg']);


$sweet2=new Sweet;
$sweet2->name='Lukss';
$sweet2->color='red';
$sweet2->price='9';
$label2=$app->add(['Label',$sweet2->name,$sweet2->color.' massive','detail'=>$sweet2->price,'image'=>'http://i.ebayimg.com/thumbs/images/g/-EoAAOSwx2dYENET/s-l225.jpg']);


$sweet3= new Sweet;
$sweet3->name='Laciši';
$sweet3->color='teal';
$sweet3->price='5';
$label3=$app->add(['Label',$sweet3->name,$sweet3->color.' massive','detail'=>$sweet3->price,'image'=>'http://www.laima.lv/wp-content/uploads/2016/05/4750001340235_L-C-TIS-epain-tis-2kg-konf.jpg']);


$sweet4= new Sweet;
$sweet4->name='Serenade';
$sweet4->color='blue';
$sweet4->price='8';
$label4=$app->add(['Label',$sweet4->name,$sweet4->color.' massive','detail'=>$sweet4->price,'image'=>'http://www.la.lv/wp-content/uploads/2013/10/g1/serenade2.gif']);
*/


/*

$menu=$app->add('Menu');

$clothes=$menu->addMenu('Clothes');

$clothes->addItem('Shirts');
$clothes->addItem('Pants');
$clothes->addItem('Shoes');
$clothes->addItem('Jeans');
$clothes->addItem('Jackets');



$electronics=$menu->addMenu('Electronics');

$electronics->addItem('Notebooks');
$electronics->addItem('Mobile Phones');
$electronics->addItem('Headphones');
$electronics->addItem('Speakers');
$electronics->addItem('TV');

$toys=$menu->addMenu('Toys');

$toys->addItem('Lego');
$toys->addItem('RC toys');
$toys->addItem('Dolls');
$toys->addItem('Teddy bears');
$toys->addItem('For babies');
$toys->addItem('Figures');

$tabs=$app->add('Tabs');
$clothes=$tabs->addTab('Clothes');
$electronics=$tabs->addTab('Electronics');
$toys=$tabs->addTab('Toys');
$image=$clothes->add(['Image','https://www.jako.de/Data/Images/Big/jako-herren-t-shirt-run-jako-blau-1-6115.jpg']);
$image2=$electronics->add(['Image','https://media.wired.com/photos/59b95b40a9e33173fe3624e5/master/w_2400,c_limit/iphonex_TA.jpg']);
$image3=$toys->add(['Toys','https://img.brickowl.com/files/image_cache/larger/lego-the-batmobile-two-face-s-escape-set-7781-4.jpg']);
*/
