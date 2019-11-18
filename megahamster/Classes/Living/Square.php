<?php
/**
 * Created by PhpStorm.
 * User: matth
 * Date: 30.09.2019
 * Time: 12:22
 */
namespace The360Dunker\megahamster\Living;

class Square extends Room implements \JsonSerializable
{
    private $length;
    private $width;
    private $hight;

    public function __construct(string $bezeichnung,int $typ, float $preis, float $length, float $hight, float $width, string ... $zusatzausstattung)
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
            'goessen' => $this->getGroessen(),
            'flaeche' =>$this->getGrundflaeche(),
            'zusatzausstattung'=> $this->getZusatzausstattung()
        ];
        return $rv;
    }
}