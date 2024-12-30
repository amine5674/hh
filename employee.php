<?php

require_once("personne.php");

class Employee extends Personne {
    public function __construct($nom, $prenom, $ville) {
        parent::__construct($nom, $prenom, $ville);
    
    }
}
