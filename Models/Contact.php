<?php

class Contact
{
    /**
     * @var string $Nom 
     * Nom du contact
     */
    private $Nom;

    /**
     * @var string $Prenom 
     * Premon du contact
     */
    private $Prenom;

    /**
     * @var string $Nunero 
     * Numero de tel du contact
     */
    private $Numero;

    /**
     * @var DateTime $CretedAt
     * Date de creation du contact 
     */
    private $CretedAt;


    /**
     * Constructeur 
     */
    public function __construct($nom, $prenom, $numero)
    {
        $this->Nom = $nom;
        $this->Prenom = $prenom;
        $this->Numero = $numero;
        $this->CretedAt = new DateTime();
    }
}
