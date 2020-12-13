<?php

class Commentaire
{
    private String $description;

    function __construct(string $commentaire)
    {
        $this->$idProduit = $idProduit;
        $this->$description = $description;
    }

    public function getId(): ?int
    {
        return $this->$idProduit;
    }

    public function getDescription(): ?string
    {
        return $this->$description;
    }

    public function setIdProduit(string $idProduit)
    {
        return $this->$idProduit = $idProduit;
    }
    public function setDescription(string $description)
    {
        return $this->$description = $description;
    }
}
