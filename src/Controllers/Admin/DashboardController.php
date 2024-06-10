<?php

namespace Pc\AssmPhp21\Controllers\Admin;

use Pc\AssmPhp21\Commons\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return $this->renderViewAdmin('dashboard');
    }
}

