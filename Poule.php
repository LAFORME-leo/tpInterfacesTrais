<?php
class Poule extends Animal implements Iovipare
{
    public function infos(): string {
        return "La poule " . $this->_name . " couve des œufs";
    }
}