<?php
abstract class Animal
{
    protected string $_name;

    public function __construct(string $name) {
        $this->_name = $name;
    }

    abstract public function infos(): string;
}