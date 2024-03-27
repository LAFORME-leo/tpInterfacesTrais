<?php
class Vache extends Animal implements Imammifere, Iherbivor
{
    public function infos(): string {
        return "La vache " . $this->_name . " broute de l'herbe";
    }
}