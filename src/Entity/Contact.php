<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Contact {

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min=2,  max=120)
     */
    private $name;
    
    /**
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $email;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min=5, minMessage="Le message est trop court")
     */
    private $message;

    public function getName(): ?string
    {
       return $this->name;
    }

    public function setName(?string $name)
    {
        $this->name = $name;
        return $this;
    }
    
    public function getMessage(): ?string
    {
       return $this->message;
    }

    public function setMessage(?string $message)
    {
        $this->message = $message;
        return $this;
    }
    
    public function getEmail(): ?string
    {
       return $this->email;
    }

    public function setEmail(?string $email): Contact
    {
        $this->email = $email;
        return $this;
    }

}

