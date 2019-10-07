<?php
/**
 * Created by PhpStorm.
 * User: matth
 * Date: 23.09.2019
 * Time: 12:24
 */

abstract class Room
{
    private $preis;
    private $bezeichnung;
    private $zusatzausstattung= ["Kalkleckstein"];
    private $typ;

    public function __construct(string $bezeichnung,int $typ, float $preis, array $zusatzausstattung)
    {
        $this->preis = $preis;
        $this->bezeichnung = $bezeichnung;
        $this->zusatzausstattung[]=$zusatzausstattung;
        $this->typ=$typ;
    }
    /**
     * @return float
     */
    public function getPreis(): float
    {
        return $this->preis;
    }
    /**
     * @return string
     */
    public function getBezeichnung(): string
    {
       return $this->bezeichnung;
    }


    /**
     * @return array
     */
    public function getZusatzausstattung(): array
    {
        return $this->zusatzausstattung;
    }

    /**
     * @return int
     */
    public function getTyp(): int
    {
        return $this->typ;
    }


    function __toString() : string
    {
        return $this->getBezeichnung().' '.$this->getPreis().'$'.$this->getZusatzausstattung();
    }

    public abstract function getGrundflaeche():float;
}

