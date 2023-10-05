<?php

class Empleado extends Persona8 {
    private int $sou;
    private array $telefons;

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
        $this->telefons[]=$telefono;
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

    public static function toHtml(Empleado $emp): string {
        $cadena = parent::toHtml($emp);
        if (count($emp->telefons) > 0){
            $cadena .= "<ul>";
            foreach ($emp->telefons as $telefon) {
                $cadena .= "<li>" . $telefon . "</li>";
            }
            $cadena .= "</ul>";
        }
        return $cadena;
    }
}