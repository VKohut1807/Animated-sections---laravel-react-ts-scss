<?php

namespace App\Http\Controllers;

use App\Models\HttpActions;
use Illuminate\Support\Facades\Config;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PageController extends Controller
{
    public function homepage()
    {
        return view(
            'layouts.home',
        );
    }
}
