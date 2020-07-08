<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.users');
    }
    public function ShowUsers()
    {
        return view('users.showUsers');
    }
    public function Account()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'http://10.9.20.139/laravel/IM-MPLAY/api/user/10');
        $response->getBody(); 
    	return view('users.account');
    }
}
