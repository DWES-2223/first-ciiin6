<?php

abstract class Worker extends Person {
    protected $telefons = array();
    protected int $sou;

    public function setSueldo(int $sou): void
    {
        $this->sou = $sou;
    }

    public function setTelefons(array $telefons): void
    {
        $this->telefons = $telefons;
    }


    public function getSou(): int
    {
        return $this->sou;
    }

    public function getTelefons(): array
    {
        return $this->telefons;
    }

    public function anyadirTelefono(int $telefono) : void {
        $this->telefons[] = $telefono;
    }

    public function listarTelefonos(): string {
        return implode(",",$this->telefons);
    }

    public function vaciarTelefonos(): void {
        $this->telefons = array();
    }

    public function debePagarImpuestos(): bool {
        return $this->sou > 3333;
    }

    public static function toHtml(Person $emp): string {
        $cadena = Person::toHtml($emp);
        if ($emp instanceof Worker && count($emp->telefons) > 0){
            $cadena .= "<ul>";
            foreach ($emp->telefons as $telefon) {
                $cadena .= "<li>" . $telefon . "</li>";
            }
            $cadena .= "</ul>";
        }
        return $cadena;
    }

    public function __toString(): string
    {
        $string = parent::__toString();
        if (count($this->telefons) > 0){
            $string .= "<ul>";
            foreach ($this->telefons as $telefon) {
                $string .= "<li>" . $telefon . "</li>";
            }
            $string .= "</ul>";
        }
        return $string;
    }
}