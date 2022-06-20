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
     * Méthode appelé lors de la réinitialisation d'un mot de passe
     */
    public function resetPassword()
    {
        // Charge les models
        $oUserModel = new User();
    }
}