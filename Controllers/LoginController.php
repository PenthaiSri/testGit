<?php

namespace Controllers;

use Models\User;

class LoginController {


    public function Login()
    {
        //Charge les models
        $oUserModel = new User();
    }

    /**
     * Méthode permettant de créer un utilisateur et l'enregistrer en base de données
     * 
     * @version 1.2206.0
     * @return  bool
     */
    public function create()
    {
        // Charge les models
        $oUserModel = new User();
    }

    /**
     * Méthode deleteUser
     * 
     * @version 1.2206.0
     * @return  bool
     */
    public function deleteUser()
    {
        // Charge les models
        $oUserModel = new User();
    }
}