<?php

class Commentaire
{
    private String $title;
    private String $description;
    private int $price;
    private String $category;
    private String $image;

    function __construct(string $title, string $description, int $price, string $category, string $image)
    {
        $this->$title = $title;
        $this->$description = $description;
        $this->$price = $price;
        $this->$category = $category;
        $this->$image = $image;
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
