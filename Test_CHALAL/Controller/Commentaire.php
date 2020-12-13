<?php

class Commentaire
{
    private string $commentaire;

    public function __construct(string $commentaire)
    {
        $this->setCommentaire($commentaire);
    }


    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire)
    {
        return $this->commentaire = $commentaire;
    }
}

