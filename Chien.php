<?php
class Chien extends Animal implements Imammifere, Ipredateur
{
    public function infos(): string {
        return "Le chien " . $this->_name . " chasse des animaux";
    }
}
