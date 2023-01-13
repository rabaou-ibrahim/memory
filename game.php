<?php 
//On demare la session sur sur cette page 
session_start();
include('Card.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu</title>
    <link rel="stylesheet" href="style.css">
    <style type="text/css">a:link{text-decoration:none}</style>
</head>

<body>

<header style="color:white;">
    <li><a href="index.php" style="color:white;">ACCUEIL</a></li>
</header>

<p style="color:white;">
    <u>Nombre de tentatives :</u>
</p>

<?php

$list = [$Russia->get_card_image(), $Portugal->get_card_image(), $Slovakia->get_card_image(), $Ukraine->get_card_image(), $Finland->get_card_image(), $Turkey->get_card_image(), $Belgium->get_card_image(), $Denmark->get_card_image(), $Croatia->get_card_image(), $Czech_Republic->get_card_image(), $Wales->get_card_image(), $North_Macedonia->get_card_image(), $Netherlands->get_card_image(), $Austria->get_card_image(), $Switzerland->get_card_image(), $Sweden->get_card_image(), $Italy->get_card_image(), $Spain->get_card_image(), $England->get_card_image(), $Scotland->get_card_image(), $Germany->get_card_image(), $Poland->get_card_image(), $France->get_card_image(), $Hungary->get_card_image()];

$list2 = [$hidden_card->get_card_image()];

$list = array_slice($list, 2);
$list = array_slice($list, 0, $_SESSION['pick']);

$count = 0;

shuffle($list);

    for ($i = 0; $i < $_SESSION['pick']; $i++) {

        print_r($list[$i]);
        $count = $count+1;
    }

    echo '<br>';

shuffle($list);
        
    for ($i = 0; $i < $_SESSION['pick']; $i++) {

        print_r($list[$i]);
        $count = $count+1;
    }


echo '<br>';
echo '<br>';

shuffle($list2);

$count = 0;

    for ($i = 0; $i < $_SESSION['pick']; $i++) {

        print_r($list2[0]);
        $count = $count+1;
    }

    echo '<br>';

shuffle($list2);
        
    for ($i = 0; $i < $_SESSION['pick']; $i++) {

        print_r($list2[0]);
        $count = $count+1;
    }


echo '<br>';
echo '<br>';

?>