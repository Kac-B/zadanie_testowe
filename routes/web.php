<?php

use App\Core\Route;
use App\Controllers\HomeController;
use App\Controllers\ContractorController;
use App\Controllers\ControlsController;
use App\Controllers\EmployeeTableController;
use App\Controllers\InvoiceController;
use App\Controllers\DelegationController;

Route::make('/', HomeController::class, 'index');
Route::make('/kontrolki-html', ControlsController::class, 'index');
Route::make('/tabela-pracownikow-html', EmployeeTableController::class, 'index');
Route::make('/delegacje/lista', DelegationController::class, 'index');
Route::make('/faktura-vat', InvoiceController::class, 'index');
Route::make('/kontrahent/lista', ContractorController::class, 'index');
Route::make('/kontrahent/dodaj', ContractorController::class, 'create');
Route::make('/kontrahent/edycja', ContractorController::class, 'edit');
Route::make('/kontrahent/zapisz', ContractorController::class, 'store');
Route::make('/kontrahent/aktualizacja', ContractorController::class, 'update');
Route::make('/kontrahent/usun', ContractorController::class, 'delete');

$action = $_SERVER['REQUEST_URI'];
Route::dispatch($action);
