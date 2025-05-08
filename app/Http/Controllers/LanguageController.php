<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function change($lang)
    {
        if (in_array($lang, ['en', 'bn', 'fr'])) {
            App::setLocale($lang);
            Session::put('locale', $lang);
        }
        return redirect()->back();
    }
}
