<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
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

    /**
     * @param SettingPostRequest $request
     */
    public function settingsSave(SettingPostRequest $request)
    {
        $checkFoExitst = DB::select("select * from users where url=\"$request->retail_api_url\"");
        if (session()->get('clientId') and !empty($checkFoExitst)) {
            $editUserProfile = DB::table('users')->where('url', $request->retail_api_url)->update([
                'url' => $request->retail_api_url,
                'key' => $request->retail_api_key
            ]);
            $clientId = $checkFoExitst[0]->clientId;
        } else {
            $clientId = hash('ripemd160',$request->retail_api_key);
            $createUserProfile = DB::table('users')->insert([
                'url' => $request->retail_api_url,
                'key' => $request->retail_api_key,
                'clientId' => $clientId
            ]);
        }

        session_start();
        session()->put('clientId', $clientId);

        return redirect()->route('index');

    }

}
