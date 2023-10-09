<?php

class Enterprise {
    private string $nom;
    private string $direccio;
    private array $workers;

    /**
     * @param string $nom
     * @param string $direccio
     */
    public function __construct(string $nom, string $direccio)
    {
        $this->nom = $nom;
        $this->direccio = $direccio;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getDireccio(): string
    {
        return $this->direccio;
    }

    public function setDireccio(string $direccio): void
    {
        $this->direccio = $direccio;
    }

    public function addWorker(Worker $t){
        $this->workers[]=$t;
    }

    public function listWorkersHtml() : string {
        $list = "<div>";
        foreach ($this->workers as $worker){
            $list .= Worker::toHtml($worker);
        }
        return $list . "</div>";
    }

    public function getCosteNominas() : float {
        $coste = 0;
        foreach ($this->workers as $worker){
            $coste += $worker->calcularSueldo();
        }
        return $coste;
    }

}

