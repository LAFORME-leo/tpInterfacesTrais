<?php
class Livre  implements Printable
{
    private string $_titre;
    private int $_dateSortie;
    private string $_isbn;
    private string $_resume;

    public function __construct(string $titre, int $dateSortie, string $isbn, string $resume) 
    {
        $this->_titre = $titre;
        $this->_dateSortie = $dateSortie;
        $this->_isbn = $isbn;
        $this->_resume = $resume;
    }

    public function getTitre():string
    {
        return $this -> _titre;
    }

    public function getDateSortie():int
    {
        return $this -> _dateSortie;
    }

    public function getIsbn():string
    {
        return $this -> _isbn;
    } 

    public function getResume():string
    {
        return $this -> _resume;
    }
}