<?php

namespace App\Controllers;





class Posts extends \Core\Controller
{



    public function indexAction()
    {

        echo 'hello from index action of posts controller';
    }
    public function editAction()
    {

        echo 'hello from edit method of posts controller';

        print_r($this->route_params);
    }
}
