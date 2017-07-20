<?php
require 'form.php';

$whatsauce = $_POST['sauce'];
$email = $_POST['email'];

$form = new Form($_POST);

echo $form->startform();
echo $form->input();
echo $form->select('Porc', 'Boeuf', 'Poulet');
echo $form->submit("J'ai faim !");
echo $form->textarea();
echo $form->radio();
echo $form->checkbox();
echo $form->endform();

$link = new Html();

echo $link->meta();
echo $link->css();
echo $link->jquery();
echo $link->jqueryui();
echo $link->scriptjs();
echo $link->image();
echo $link->a('http://a141.idata.over-blog.com/4/91/81/31/gateau-d-anniversaire/Foret-noire-3.jpg', 'Dessert');

$val = new Validator();

echo $val->isValidMail($email);
