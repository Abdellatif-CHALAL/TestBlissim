<?php

class Commentaire
{
    private String $commentaire;

    function __construct(string $commentaire)
    {
        $this->$commentaire = $commentaire;
    }


    public function getCommentaire(): ?string
    {
        return $this->$commentaire;
    }

    public function setDescription(string $commentaire)
    {
        return $this->$commentaire = $commentaire;
    }
}
