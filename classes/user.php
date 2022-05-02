<?php
class User {
    private $id;
    private $name;
    private $surname;
    private $date_of_birth;
    private $cf;
    private $mail;
    private $password;
    private $sconto = 20;

    public function __construct($name, $surname, $date_of_birth, $cf, $mail, $password)
    {
        $this->name=$name;
        $this->surname=$surname;
        $this->date_of_birth=$date_of_birth;
        $this->cf=$cf;
        $this->mail=$mail;
        $this->password=$password;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of surname
     */ 
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Get the value of date_of_birth
     */ 
    public function getDate_of_birth()
    {
        return $this->date_of_birth;
    }

    /**
     * Get the value of cf
     */ 
    public function getCf()
    {
        return $this->cf;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get the value of sconto
     */ 
    public function getSconto()
    {
        return $this->sconto;
    }
}