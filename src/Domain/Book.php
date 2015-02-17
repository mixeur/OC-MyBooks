<?php

namespace MyBooks\Domain;

class Book 
{
    /**
     * Article id.
     *
     * @var integer
     */
    private $id;

    /**
     * Article title.
     *
     * @var string
     */
    private $title;

    /**
     * Article content.
     *
     * @var string
     */
    private $summary;
    
    /**
     * Book author.
     *
     * @var string
     */
    private $author;
    
    /**
     * Book ISBN.
     *
     * @var string
     */
    private $isbn;

    function getId() {
        return $this->id;
    }

    function getTitle() {
        return $this->title;
    }

    function getSummary() {
        return $this->summary;
    }

    function getAuthor() {
        return $this->author;
    }

    function getIsbn() {
        return $this->isbn;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setSummary($summary) {
        $this->summary = $summary;
    }

    function setAuthor(Author $author) {
        $this->author = $author;
    }

    function setIsbn($isbn) {
        $this->isbn = $isbn;
    }


}