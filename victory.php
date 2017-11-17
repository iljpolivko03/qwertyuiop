<?php
echo "Izi izi izi ril top";
require'vendor/autoload.php';
$app = new \atk4\ui\App("Я угадал твоё число!");
$app->initLayout("Centered");

$button=$app->add(['Button']);
$button->set('Ещё раз');
$button-link(['index']);
$button->addClass('green');
