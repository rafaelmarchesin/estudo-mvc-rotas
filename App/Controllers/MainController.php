<?php

namespace App\Controllers;

//Esta classe tem como objetivo receber as rotas das páginas principais
class MainController
{
    public function __construct()
    {
        
    }

    public function index()
    {
        require_once __DIR__ . '/../Views/index.phtml';
    }

    public function insertText()
    {
        require_once __DIR__ . '/../Views/insertText.phtml';
    }
}