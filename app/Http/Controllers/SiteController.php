<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Главная страница
     *
     * @return \Illuminate\View\View
     */

    public function index()
    {


        return view('site/index');
    }

    /**
     * Страница описания модуля
     *
     * @return \Illuminate\View\View
     */

    public function description()
    {
        return view('site/description');
    }

    /**
     * Страница поддержки модуля
     *
     * @return \Illuminate\View\View
     */

    public function support()
    {
        return view('site/support');
    }
}
