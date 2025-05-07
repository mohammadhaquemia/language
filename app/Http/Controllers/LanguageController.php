<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function change(Request $request){
        $lang = $request->lang;   
        app()->setLocale($lang);    
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
