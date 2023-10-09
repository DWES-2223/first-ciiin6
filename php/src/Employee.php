<?php

use JetBrains\PhpStorm\Pure;

class Employee extends Worker {

    protected float $horasTrabajadas;
    protected float $precioPorHora;

    /**
     * @param float $horasTrabajadas
     * @param float $precioPorHora
     */
   public function __construct(float $horasTrabajadas, float $precioPorHora,string $nom, string $cognoms, string $edat)
    {
        parent::__construct($nom,$cognoms,$edat);
        $this->horasTrabajadas = $horasTrabajadas;
        $this->precioPorHora = $precioPorHora;
    }

    public function setSueldo(int $sou): void
    {
        $this->sou = $sou;
    }

    public function setTelefons(array $telefons): void
    {
        $this->telefons = $telefons;
    }


    public function getTelefons(): array
    {
        return $this->telefons;
    }

    public function calcularSueldo() : int {
        return $this->horasTrabajadas * $this->precioPorHora;
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
        return $this->calcularSueldo() > 3333;
    }

    public static function toHtml(Persona8|Persona $emp): string {
        $cadena = Persona8::toHtml($emp);
        if ($emp instanceof Employee && count($emp->telefons) > 0){
            $cadena .= "<ul>";
            foreach ($emp->telefons as $telefon) {
                $cadena .= "<li>" . $telefon . "</li>";
            }
            $cadena .= "</ul>";
        }
        return $cadena;
    }


}