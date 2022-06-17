<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Bienvenido 
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<header>
       
            <h1>
                ¡Bienvenido!
            </h1>
            <h1>
                Menú
            </h1>
            <style>
                a{
                    display:blok;
                    width: 50px;
                    font-family:Arial, Helvetica, sans-serif;
                    font.weight:700;
                    border-radius:10px;
                    margin:0px 0px;
                    padding: 10px 10px;
                    background-color:#fff;
                    color:#050709;
                    text-decoration:none;
                }
                
            </style>
            <h3>
            <a href="http://localhost:8765/costumerstable" tarjet="_blank">Clientes</a> 
            </h3>
            <h3>
            <a href="http://localhost:8765/dailyregisterstable" tarjet="_blank">Registro Diario</a>
            </h3>
            <h3>
            <a href="http://localhost:8765/deliveriestable" tarjet="_blank">Repartidores</a>
            </h3>
        
            <h3>
            <a href="http://localhost:8765/orderstable" tarjet="_blank">Pedidos</a> 
             </h3>
             
             <h3>
             <a href="http://localhost:8765/preferencetable" tarjet="_blank">Clientes Preferidos</a>   
            </h3>
            
            <h3>
            <a href="http://localhost:8765/supplierstable" tarjet="_blank">Proveedores</a>    
            </h3>
            <h3>
            <a href="http://localhost:8765/users" tarjet="_blank">Usuarios</a>    
            </h3>
            <?= $this->Html->link("Cerrar Sesión", ['action' => 'logout']) ?>
    </header>
</body>