<?php

class Commentaire
{
    private $commentaire;

    function __construct($commentaire)
    {
        $this->$commentaire = $commentaire;
    }


    public function getCommentaire()
    {
        return $this->$commentaire;
    }

    public function setDescription($commentaire)
    {
        return $this->$commentaire = $commentaire;
    }
}
