<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Models\Setting;
use App\Http\Requests\SettingPostRequest;

class SettingController extends Controller
{
    /**
     * Страница настроек
     *
     * @return \Illuminate\View\View
     */

    public function index()
    {
        return view('setting/index');
    }

}
