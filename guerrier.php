<?php
class Guerrier
{
    public $attaque = 100;
    public $vie = 180;
    private $armure = 100;
    private $arme;
    private $degats;
    private $experience = 0;

  
    public function attaque($cible)
    {

        $cible->degats($this->attaque);
    }
    public function degats($degats)
    {
        $this->vie -= $degats;
    }
    public function experience()
    {
        return $this->experience;
    }
    public function mort()
    {
        if ($this->vie <= 0){
            echo "il vous reste" .$this->vie. "";
        }else{
            echo "<br>il vous reste" .$this->vie. "points de vie";
        }
    }
}
