<?php

class Role {
    private string $nomPersonnage;

    public function __construct(string $nomPersonnage)
    {
        $this->nomPersonnage = $nomPersonnage;
    }

    
    public function getNomPersonnage()
    {
        return $this->nomPersonnage;
    }
    public function setNomPersonnage($nomPersonnage)
    {
        $this->nomPersonnage = $nomPersonnage;

        return $this;
    }
}