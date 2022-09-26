<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function __invoke(Request $request)
    {
        return "你好，我的帳號是".$request->input('acc');
    }
}
