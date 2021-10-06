<?php

namespace App\Providers;

class BaseController
{
    public $request;
    public function __construct()
    {
        $request = new Request();
        $this->request = $request;
    }
}