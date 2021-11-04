<?php


declare(strict_types=1);


namespace App\Controllers;

class EmployeeTableController extends Controller
{
    public function index(): string
    {
        return $this->getTemplate()->render('employee');
    }
}
