<?php

class Commentaire
{
    private $commentaire;

    function __construct($commentaire1)
    {
        $this->$commentaire = $commentaire1;
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
