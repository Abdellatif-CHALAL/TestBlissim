<?php

class Commentaire
{
    private String $description;

    function __construct(string $commentaire)
    {
        $this->$commentaire = $commentaire;
    }

    public function getId(): ?int
    {
        return $this->$idProduit;
    }

    public function getCommentaire(): ?string
    {
        return $this->$commentaire;
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
