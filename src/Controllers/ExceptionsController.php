<?php

namespace App\Controllers;

class ExceptionsController extends \Core\Controller
{
    
    public function error_404()
    {
        echo $this->twig->render('error.html', array('error_code' => 404, 'error_message' => 'The page you are looking for has been moved.'));
    }

}