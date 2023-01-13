<?php

class Card
{
    // Propriétés 
    public $id;
    public $name;
    public $card_image;
    public $hidden_card;
    // Méthodes
    function set_name($name)
    {
        $this->name = $name;
    }

    function set_card_image($card_image)
    {
        $this->card_image = $card_image;
    }

    function set_hidden_card($hidden_card){
        $this->hidden_card = $hidden_card;
    }

    function get_name()
    {
        return $this->name;
    }

    function get_card_image(){
        return $this->card_image;
    }

    function get_hidden_card(){
        return $this->hidden_card;
    }

    // Ici on ajoute un booléen pour determiner si une carte est retournée ou pas

}

$hidden_card = new Card();
$hidden_card->set_name('hidden_card');
$hidden_card->set_card_image('<img src="Images/carte_cachee/face_cachee.png" width=100px; height=100px;>
');

$Turkey = new Card();
$Turkey->set_name('Turkey');
$Turkey->set_card_image('<img src="Images/Cartes/turkey.png" width=100px; height=100px;>
');

$Italy = new Card();
$Italy->set_name('Italy');
$Italy->set_card_image('<img src="Images/Cartes/italy.png" width=100px; height=100px;>
');

$Wales = new Card();
$Wales->set_name('Wales');
$Wales->set_card_image('<img src="Images/Cartes/wales.jfif" width=100px; height=100px;>
');

$Switzerland = new Card();
$Switzerland->set_name('Switzerland');
$Switzerland->set_card_image('<img src="Images/Cartes/switzerland.png" width=100px; height=100px;>
');

$Belgium = new Card();
$Belgium->set_name('Belgium');
$Belgium->set_card_image('<img src="Images/Cartes/belgium.png" width=100px; height=100px;>
');

$Denmark = new Card();
$Denmark->set_name('Denmark');
$Denmark->set_card_image('<img src="Images/Cartes/denmark.png" width=100px; height=100px;>
');

$Finland = new Card();
$Finland->set_name('Finland');
$Finland->set_card_image('<img src="Images/Cartes/finland.png" width=100px; height=100px;>
');

$Russia = new Card();
$Russia->set_name('Russia');
$Russia->set_card_image('<img src="Images/Cartes/russia.png" width=100px; height=100px;>
');

$Austria = new Card();
$Austria->set_name('Austria');
$Austria->set_card_image('<img src="Images/Cartes/austria.png" width=100px; height=100px;>
');

$Netherlands = new Card();
$Netherlands->set_name('Netherlands');
$Netherlands->set_card_image('<img src="Images/Cartes/netherlands.png" width=100px; height=100px;>
');

$North_Macedonia = new Card();
$North_Macedonia->set_name('North_Macedonia');
$North_Macedonia->set_card_image('<img src="Images/Cartes/north_macedonia.png" width=100px; height=100px;>
');

$Ukraine = new Card();
$Ukraine->set_name('Ukraine');
$Ukraine->set_card_image('<img src="Images/Cartes/ukraine.png" width=100px; height=100px;>
');

$Croatia = new Card();
$Croatia->set_name('Croatia');
$Croatia->set_card_image('<img src="Images/Cartes/croatia.png" width=100px; height=100px;>
');

$Czech_Republic = new Card();
$Czech_Republic->set_name('Czech_Republic');
$Czech_Republic->set_card_image('<img src="Images/Cartes/czech_republic.png" width=100px; height=100px;>
');

$England = new Card();
$England->set_name('England');
$England->set_card_image('<img src="Images/Cartes/england.png" width=100px; height=100px;>
');

$Scotland = new Card();
$Scotland->set_name('Scotland');
$Scotland->set_card_image('<img src="Images/Cartes/scotland.png" width=100px; height=100px;>
');

$Poland = new Card();
$Poland->set_name('Poland');
$Poland->set_card_image('<img src="Images/Cartes/poland.png" width=100px; height=100px;>
');

$Spain = new Card();
$Spain->set_name('Spain');
$Spain->set_card_image('<img src="Images/Cartes/spain.png" width=100px; height=100px;>
');

$Sweden = new Card();
$Sweden->set_name('Sweden');
$Sweden->set_card_image('<img src="Images/Cartes/sweden.png" width=100px; height=100px;>
');

$Slovakia = new Card();
$Slovakia->set_name('Slovakia');
$Slovakia->set_card_image('<img src="Images/Cartes/slovakia.png" width=100px; height=100px;>
');

$France = new Card();
$France->set_name('France');
$France->set_card_image('<img src="Images/Cartes/france.png" width=100px; height=100px;>
');

$Germany = new Card();
$Germany->set_name('Germany');
$Germany->set_card_image('<img src="Images/Cartes/germany.png" width=100px; height=100px;>
');

$Portugal = new Card();
$Portugal->set_name('Portugal');
$Portugal->set_card_image('<img src="Images/Cartes/portugal.png" width=100px; height=100px;>
');

$Hungary = new Card();
$Hungary->set_name('Hungary');
$Hungary->set_card_image('<img src="Images/Cartes/hungary.png" width=100px; height=100px;>
');

$list = [$Russia->get_card_image(), $Portugal->get_card_image(), $Slovakia->get_card_image(), $Ukraine->get_card_image(), $Finland->get_card_image(), $Turkey->get_card_image(), $Belgium->get_card_image(), $Denmark->get_card_image(), $Croatia->get_card_image(), $Czech_Republic->get_card_image(), $Wales->get_card_image(), $North_Macedonia->get_card_image(), $Netherlands->get_card_image(), $Austria->get_card_image(), $Switzerland->get_card_image(), $Sweden->get_card_image(), $Italy->get_card_image(), $Spain->get_card_image(), $England->get_card_image(), $Scotland->get_card_image(), $Germany->get_card_image(), $Poland->get_card_image(), $France->get_card_image(), $Hungary->get_card_image()];

$list2 = [$hidden_card->get_card_image()];


?>
