<?php

class Personne {
    private $nom;
    private $prenom;
    private $ville;
    private $code;

    static $c =0 ;

    public function __construct($nom, $prenom, $ville) {
        $this->code = ++static::$c;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->ville = $ville;
    }

    public function __toString() {
        return $this->code   . "  Nom: " . $this->nom . ", Prenom: " .  $this->prenom . ", Ville: " . $this->ville;

    }
    
}


