<?php

use System\Route;
use App\Controller\CodigoController;
use App\Controller\LenguajeController;
use App\Controller\FrontView\HomeController;


/**
 * cargar el autoloader de composer Y la configuracion de la aplicacion
 */
require_once dirname(__DIR__) . '/System/Autoload.php';

//  FrontView
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/listacodigos', [HomeController::class, 'listacodigos'])->name('home.listacodigos');

//LenguajeController
Route::get('/lenguajes', [LenguajeController::class, 'index'])->name('lenguajes.index');
Route::get('/lenguajes/create', [LenguajeController::class, 'create'])->name('lenguajes.create');
Route::post('/lenguajes/create', [LenguajeController::class, 'store']);
Route::get('/lenguajes/edit', [LenguajeController::class, 'edit'])->name('lenguajes.edit');
Route::post('/lenguajes/edit', [LenguajeController::class, 'update']);
Route::get('/lenguajes/destroy', [LenguajeController::class, 'destroy'])->name('lenguajes.destroy');

//CodigoController
Route::get('/codigos', [CodigoController::class, 'index'])->name('codigos.index');
Route::get('/codigos/show', [CodigoController::class, 'show'])->name('codigos.show');
Route::get('/codigos/create', [CodigoController::class, 'create'])->name('codigos.create');
Route::post('/codigos/create', [CodigoController::class, 'store']);
Route::get('/codigos/edit', [CodigoController::class, 'edit'])->name('codigos.edit');
Route::post('/codigos/edit', [CodigoController::class, 'update']);
Route::get('/codigos/destroy', [CodigoController::class, 'destroy'])->name('codigos.destroy');
Route::get('/codigos/lista', [CodigoController::class, 'lista'])->name('codigos.lista');

//comparar
Route::get('/lenguajes/comparar', [LenguajeController::class, 'comparar'])->name('lenguajes.comparar');
Route::get('/codigos/listacomparar', [CodigoController::class, 'listacomparar'])->name('codigos.listacomparar');
//php
Route::get('/lenguajes/php', [LenguajeController::class, 'php'])->name('lenguajes.php');
Route::get('/codigos/listaphp', [CodigoController::class, 'listaphp'])->name('codigos.listaphp');
//js
Route::get('/lenguajes/js', [LenguajeController::class, 'js'])->name('lenguajes.js');
Route::get('/codigos/listajs', [CodigoController::class, 'listajs'])->name('codigos.listajs');
//laravel
Route::get('/lenguajes/laravel', [LenguajeController::class, 'laravel'])->name('lenguajes.laravel');
Route::get('/codigos/listalaravel', [CodigoController::class, 'listalaravel'])->name('codigos.listalaravel');
//css
Route::get('/lenguajes/css', [LenguajeController::class, 'css'])->name('lenguajes.css');
Route::get('/codigos/listacss', [CodigoController::class, 'listacss'])->name('codigos.listacss');
//bootstrap
Route::get('/lenguajes/bootstrap', [LenguajeController::class, 'bootstrap'])->name('lenguajes.bootstrap');
Route::get('/codigos/listabootstrap', [CodigoController::class, 'listabootstrap'])->name('codigos.listabootstrap');
//git
Route::get('/lenguajes/git', [LenguajeController::class, 'git'])->name('lenguajes.git');
Route::get('/codigos/listagit', [CodigoController::class, 'listagit'])->name('codigos.listagit');
