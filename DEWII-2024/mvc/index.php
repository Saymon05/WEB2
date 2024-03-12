<?php
header('Access-Control-Allow-Origin: *');

require_once './modelo/ModeloVeiculo.php';
require_once './database/Conexao.php';
require_once './database/DaoVeiculo.php';
require_once './visao/VisaoVeiculo.php';
require_once './controle/ControleVeiculo.php';
/*
$modulo = filter_input(INPUT_GET,'mod', FILTER_SANITIZE_STRING);
$acao = filter_input(INPUT_GET,'acao', FILTER_SANITIZE_STRING);

$modulo = 'Controle' . ucfirst($modulo);

if (class_exists($modulo)) {
    $obj = new $modulo();
    if(method_exists($modulo, $acao)){
        echo $obj->$acao();
    } else {
        echo 'No action...';
    }
} else {
    echo 'No module...';
}*/

/*require_once __DIR__ . '/vendor/autoload.php';

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('Registro');
$log->pushHandler(new StreamHandler('registro.log', Level::Warning));

// add records to the log
$log->warning('Teste 1');
$log->error('Teste 2');*/

// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';

// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
$router->all('/{mod}/{acao}', function ($mod, $acao) {

    $modulo = 'Controle' . ucfirst($mod);

    if (class_exists($modulo)) {
        $obj = new $modulo();
        if (method_exists($modulo, $acao)) {
            echo $obj->$acao();
        } else {
            echo 'No action...';
        }
    } else {
        echo 'No module...';
        echo $mod  . '<br>'  . $acao;
    }
});


// Run it!
$router->run();
