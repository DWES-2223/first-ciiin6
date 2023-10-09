<?php

class Manager extends Worker {
    protected int $salari;

    public function __construct(int $salari,string $nom, string $cognoms, string $edat)
    {
        parent::__construct($nom,$cognoms,$edat);
        $this->salari = $salari;
    }

    public function setTelefons(array $telefons): void
    {
        $this->telefons = $telefons;
    }


    public function getTelefons(): array
    {
        return $this->telefons;
    }

    public function calcularSueldo(): int{
        return $this->salari + ($this->salari * $this->edat / 100);
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

    public static function toHtml(Person $emp): string {
        $cadena = Worker::toHtml($emp);
        if ($emp instanceof Manager && count($emp->telefons) > 0){
            $cadena .= "<ul>";
            foreach ($emp->telefons as $telefon) {
                $cadena .= "<li>" . $telefon . "</li>";
            }
            $cadena .= "</ul>";
        }
        return $cadena;
    }
}