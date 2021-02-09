<?php


class utilisateur
{
    protected const TEST = 'TATA';

    // user name
    private string $nom;

    protected string $code;


    /**
     * utilisateur constructor.
     * @param string $nom
     */
    public function __construct(string $nom){
        $this->setNom($nom);
    }

    /**
     *
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom)
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * generate a user code
     */
    public function generateCode(): string
    {
        $this->code = uniqid('utilisateur-')."-".time();
        return $this->code;
    }
}
