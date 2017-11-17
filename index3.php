<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App("Добро пожаловать");
$app->initLayout("Centered");
/*
$c=$_GET['name'];
$d=$_GET['surname'];
$label=$app->add(['Label',$c.' '.$d]);
*/
$min=$_GET['min'];
$max=$_GET['max'];
if(($max-$min==1)and(isset($_GET['key']))){
  $text=$app->add(['Text','Ты ошибся!']);
  $button=$app->add(['Button','Ещё раз']);
  $button->link(['index']);
  $button->addClass('massive red');
  $img= 'https://www.ccavenue.com/images_mcpg/retry-circle-bg.png';
  $icon = $app->add(['Image', $img]);

} else {

$mid=round(($min+$max)/2);

$label=$app->add(['Label','Ваше число '.$mid.'?']);

$button1=$app->add(['Button']);
$button1->set('Моё число больше!');
$button1->addClass('medium red');
$button1->link(['index3','min'=>$mid,'max'=>$max,'key'=>'key']);


$button2=$app->add(['Button']);
$button2->set('Моё число меньше!');
$button2->addClass('medium blue');
$button2->link(['index3','min'=>$min,'max'=>$mid,'key'=>'key']);

$button3=$app->add(['Button']);
$button3->set('Да!Это моё число!');
$button3->addClass('medium orange');
$button3->link(['victory']);
}
