<?php

namespace src;

class App
{
    public function __construct()
    {
        if (URI_PARAM == ""){
            header('Location: ' . BASE_URL . "/input");
        }
        include 'layouts/header.php';
        include 'layouts/' . URI_PARAM . '.html';
        include 'layouts/footer.php';
    }
}