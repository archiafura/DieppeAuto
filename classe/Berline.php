<?php

class Berline extends Voiture
{
    public $couleur;

    public function peindre($color)
    {
        $this->couleur = $color;
    }

    public function Frein()
   {
       echo "ABS déclenché !";
   }
}