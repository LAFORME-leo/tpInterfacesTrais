<?php
class Chat extends Animal implements Imammifere, Ipredateur, Printable
{
    public function infos(): string {
        return "Le chat " . $this->_name . " chasse des souris";
    }
}
