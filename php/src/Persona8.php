<?php

class Persona8
{
    private static $limite_edat = 66;

    public function __construct(
        protected string $nom,
        protected string $cognoms,
        protected ?int   $edat = 25)
    {
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getCognoms(): string
    {
        return $this->cognoms;
    }

    public function setCognoms(string $cognoms): void
    {
        $this->cognoms = $cognoms;
    }

    public function getEdat(): int
    {
        return $this->edat;
    }

    public function setEdat(int $edat): void
    {
        $this->edat = $edat;
    }

    public function getNombreCompleto(): string
    {
        return $this->nom . " " . $this->cognoms;
    }

    public function estaJubilado(): bool
    {
        return ($this->edat >= self::$limite_edat);
    }

    public static function modificaLimite(int $limit)
    {
        self::$limite_edat = $limit;
    }

    public static function toHtml(Persona8 $p): string
    {
        return "<p>" . $p->getNombreCompleto() . "</p>";
    }

    public function __toString(): string
    {
        return "<p>" . $this->getNombreCompleto() . "</p>";
    }
}