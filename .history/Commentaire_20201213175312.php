<?php

class Commentaire
{
    private int $idProduit = 0;
    private String $description;

    function __construct(string $idProduit, string $description)
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
