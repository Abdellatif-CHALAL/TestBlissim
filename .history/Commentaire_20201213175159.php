<?php

class Commentaire
{
    private int $id;
    private String $description;

    function __construct(string $id, string $description)
    {
        $this->$id = $id;
        $this->$description = $description;
    }

    public function getId(): ?int
    {
        return $this->$id;
    }

    public function getDescription(): ?string
    {
        return $this->$description;
    }

    public function setDescription(string $description)
    {
        return $this->$description = $description;
    }
}
