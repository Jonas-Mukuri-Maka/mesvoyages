<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of Contact
 *
 * @author zmuku
 */
class Contact {
    
    /**
     * @Assert\Length(min=2,max=100)
     * @Assert\NotBlank()
     * @var string|null
     */
    private $nom;
    
    /**
     * @Assert\Email
     * @Assert\NotBlank()
     * @var string|null
     */
    private $email;
    
    /**
     * @Assert\NotBlank()
     * @var string|null
     */
    private $message;
    
    function getNom(): ?string {
        return $this->nom;
    }

    function getEmail(): ?string {
        return $this->email;
    }

    function getMessage(): ?string {
        return $this->message;
    }

    function setNom(?string $nom) {
        $this->nom = $nom;
        return $this;
    }

    function setEmail(?string $email) {
        $this->email = $email;
        return $this;
    }

    function setMessage(?string $message) {
        $this->message = $message;
        return $this;
    }


}
