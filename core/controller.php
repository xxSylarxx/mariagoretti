<?php

class Controller
{

    protected function render($view)
    {
        require_once DIROOT . '/views/admin/'. $view .'.php'; 
    }

    protected function getPost($name)
    {
        return isset($_POST[$name]) ? $_POST[$name] : null;
    }

    protected function getGet($name)
    {
        return isset($_GET[$name]) ? $_GET[$name] : null;
    }

    protected function validateSession()
    {
        session_start();
        if (!isset($_SESSION['auth-name'])) :
            header("Location: /admin/login");
        endif;
    }
}
