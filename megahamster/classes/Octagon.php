<?php
/**
 * Created by PhpStorm.
 * User: matth
 * Date: 05.10.2019
 * Time: 17:56
 */

class Octagon extends Room
{
    private $seitenlaenge;


    public function __construct(string $bezeichnung,int $typ, float $preis, array $zusatzausstattung, float $seitenlaenge)
    {
        parent::__construct($bezeichnung,$typ, $preis, $zusatzausstattung);
        $this->seitenlaenge=$seitenlaenge;
    }

    /**
     * @return float
     */
    public function getSidelenght():float
    {
        return $this->seitenlaenge;
    }

    public function getGroessen():string
    {
        return "Seitenlänge: ".$this->getSidelenght()."cm ";
    }

    public function getGrundflaeche():float
    {
        return round(($this->seitenlaenge * $this->seitenlaenge) * (2+2 * sqrt(2)));
    }
}