<?php

namespace MyBooks\Domain;

class Author 
{
    /**
     * Author id.
     *
     * @var integer
     */
    private $id;

    /**
     * Author firstname.
     *
     * @var string
     */
    private $firstname;

    /**
     * Author lastname.
     *
     * @var string
     */
    private $lastname;
    
    /**
     * Author name (firstname lastname).
     *
     * @var string
     */
    private $name;

    function getId() {
        return $this->id;
    }

    function getFirstname() {
        return $this->firstname;
    }
    
    function getName() {
        return $this->firstname . " " . $this->lastname;
    }
    
    function setName($name) {
        $this->name = $name;
    }

    function getLastname() {
        return $this->lastname;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
    }



   
}