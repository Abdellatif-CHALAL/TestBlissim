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

    public function getTitle(): ?string
    {
        return $this->$title;
    }

    public function getDescription(): ?string
    {
        return $this->$description;
    }

    public function getPrice(): ?int
    {
        return $this->$price;
    }

    public function getCategoty(): ?string
    {
        return $this->$category;
    }

    public function getImage(): ?string
    {
        return $this->$image;
    }
}
