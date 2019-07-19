<?php

namespace App\Controllers;

class ExampleController extends \Core\Controller
{
    
    public function example()
    {
        // Code...
        echo $this->twig->render('index.html', array('framework' => 'LC framework'));
    }

}