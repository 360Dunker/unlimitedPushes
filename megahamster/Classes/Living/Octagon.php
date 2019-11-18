<?php
/**
 * Created by PhpStorm.
 * User: matth
 * Date: 05.10.2019
 * Time: 17:56
 */

namespace The360Dunker\megahamster\Living;

class Octagon extends Room implements \JsonSerializable
{
    private $seitenlaenge;


    public function __construct(string $bezeichnung, int $typ, float $preis, float $seitenlaenge, string ... $zusatzausstattung)
    {
        parent::__construct($bezeichnung, $typ, $preis, $zusatzausstattung);
        $this->seitenlaenge = $seitenlaenge;
    }

    /**
     * @return float
     */
    public function getSidelenght(): float
    {
        return $this->seitenlaenge;
    }

    public function getGroessen(): string
    {
        return "Seitenlänge: " . $this->getSidelenght() . "cm ";
    }

    public function getGrundflaeche(): float
    {
        return round(($this->seitenlaenge * $this->seitenlaenge) * (2 + 2 * sqrt(2)));
    }

    /**
     * Specify data which should be serialized to JSON
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize(): array
    {
        // TODO: Implement jsonSerialize() method.
        $rv = [
            'preis' => $this->getPreis(),
            'bezeichnung' => $this->getBezeichnung(),
            'typ' => $this->getTyp(),
            'seitenlänge'=> $this->getSidelenght(),
            'goessen' => $this->getGroessen(),
            'flaeche' =>$this->getGrundflaeche(),
            'zusatzausstattung'=> $this->getZusatzausstattung()
        ];
        return $rv;
    }
}
