<?php

namespace App\Controllers;

use \Core\View;


class Home extends \Core\Controller
{

    public function indexAction()
    {



        View::render('Home/index.php', [
            'name' => 'Nikos',
            'colors' => ['red', 'green']
        ]);
    }

    protected function before()
    {
        echo 'before';
    }



    protected function after()
    {
        echo 'after';
    }
}
