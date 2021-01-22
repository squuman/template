<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RetailCrm\ApiClient;

require __DIR__ .'/../../../vendor/autoload.php';

class RetailController extends Controller
{
    private $client;

    public function __construct($url,$key)
    {
        $this->client = new ApiClient($url,$key,ApiClient::V5);
    }

    public function linkModule($clientId) {
//        $link = $this->client->request->integrationModulesEdit([
//            'active' => true,
//            'name' => 'Tilda & retailCRM модуль интеграции'
//        ])
    }
}
