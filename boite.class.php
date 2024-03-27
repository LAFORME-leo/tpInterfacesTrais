<?php
class Boite 
{
    private ArrayObject $_list;
    public function __construct()
    {
        $this->_list = new ArrayObject();
    }
    public function add(Printable $element)
    {
        $this->_list->append($element);
    }
    public function count():int
    {
        return count($this->_list);
    }
    public function list():ArrayObject
    {
        return $this->_list;
    }
}
