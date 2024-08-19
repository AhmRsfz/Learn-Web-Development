<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController {
    use AuthorizesRequests, ValidatesRequests;

    function HomePage() {
        return response()->file(public_path('index.blade.php'));
    }
    
    function LoginPage(){
        return view('login');
    }

    function LearnHTML() {
        return view('learn_html');
    }

    function LearnPHP() {
        return view('learn_php');
    }

    
}
