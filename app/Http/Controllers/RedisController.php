<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    public function index(){

        Redis::set("key","Hey You Ok");

        return "Data Saved";
    }
}
