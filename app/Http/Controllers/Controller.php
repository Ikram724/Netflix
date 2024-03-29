<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index()
    {
        return 'hello';
    }
    public function index1()
    {
        return 'hello1';
    }
    public function index2()
    {
        return 'hello2';
    }
    public function index3()
    {
        return 'hello 3';
    }
}
