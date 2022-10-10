<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\LoginController;
use MVC\Router;

$router = new Router();

// @@ Iniciar sesión 
$router->get("/", [LoginController::class, 'login']);
$router->post("/", [LoginController::class, 'login']);
$router->get("/logout", [LoginController::class, 'logout']);

// @@ Recuperar password
$router->get("/recuperar-password", [LoginController::class, 'recuperar_password']);
$router->post("/recuperar-password", [LoginController::class, 'recuperar_password']);

// Permite ver el formulario de reestablecimiento
$router->get("/recuperar", [LoginController::class, 'recuperar']);
// Permite agregar una nueva password
$router->post("/recuperar", [LoginController::class, 'recuperar']);

// @@ Creación de cuenta
$router->get("/crear-cuenta", [LoginController::class, 'crear']);
$router->get("/crear-cuenta", [LoginController::class, 'crear']);






// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();