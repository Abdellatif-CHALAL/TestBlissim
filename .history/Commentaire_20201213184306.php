<?php

class Commentaire
{
    private String $commentaire;

    function __construct($commentaire)
    {
        $this->$commentaire = $commentaire;
    }


    public function getCommentaire()
    {
        return $this->$commentaire;
    }

    public function setDescription(string $commentaire)
    {
        return $this->$commentaire = $commentaire;
    }
}
