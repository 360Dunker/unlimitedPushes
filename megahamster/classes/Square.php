<?php
/**
 * Created by PhpStorm.
 * User: matth
 * Date: 30.09.2019
 * Time: 12:22
 */

class Square extends Room
{
    private $length;
    private $width;
    private $hight;

    public function __construct(string $bezeichnung,int $typ, float $preis, array $zusatzausstattung, float $length, float $hight, float $width)
    {
        parent::__construct($bezeichnung,$typ, $preis, $zusatzausstattung);
        $this->length=$length;
        $this->hight=$hight;
        $this->width=$width;
    }

    /**
     * @return float
     */
    public function getLenght():float
    {
        return $this->length;
    }

    /**
     * @return float
     */
    public function getWidth():float
    {
        return $this->width;
    }

    /**
     * @return float
     */
    public function getHight():float
    {
        return $this->hight;
    }

    public function getGroessen():string
    {
        return "Länge: ".$this->getLenght()."cm Breite: ".$this->getWidth()."cm";
    }

    public function getGrundflaeche():float
    {
        return $this->getLenght()*$this->getWidth();
    }
}