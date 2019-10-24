<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DanielController extends Controller
{
    public function send()
    {
        return [
            'data' => request()->all(),
            'user' => auth()->user(),
        ];
    }
}
