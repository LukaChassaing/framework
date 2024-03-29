<?php

namespace Core;

class Controller
{
    protected $twig;

    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader('views');
        $this->twig = new \Twig\Environment($loader, ['cache' => '/Cache','debug'=>true]);
    }

}