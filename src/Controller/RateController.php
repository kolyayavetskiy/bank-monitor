<?php

namespace Controller;

require_once 'src/Controller/BaseController.php';

class RateController extends BaseController
{
    public function index(): void
    {
        echo $this->render('src/views/rate.php');
    }
}