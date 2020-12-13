<?php

class Commentaire
{
    private $commentaire;

    function __construct($commentaire)
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
