<?php

class Perso{

    public $atk = 50;
    public $vie = 20;
    public $def = 40;
    public $magie = 15;

}

class Guerrier extends Perso{

    public $atk = 70;
}



class Magicien extends Perso{

    public $magie = 60;
    public $atk = 10;
}


class Paladin extends Perso{
    public $magie = 40;
}


