<?php

class Produit
{
    private String $title;
    private String $description;
    private int $price;
    private String $category;
    private String $image;

    function __construct($title, $description, $price, $category, $image)
    {
        $this->$title = $title;
    }
}
