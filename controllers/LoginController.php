<?php

namespace Controllers;

class LoginController
{
    public static function login()
    {
        echo "Desde login";
    }

    public static function logout()
    {
        echo "Cerrando sesión";
    }

    public static function recuperar_password()
    {
        echo "Desde la recuperación";
    }

    public static function recuperar()
    {
        echo "Recuperación";
    }

    public static function crear()
    {
        echo "Crear cuenta";
    }
}
