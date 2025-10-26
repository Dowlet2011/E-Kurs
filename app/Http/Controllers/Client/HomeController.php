<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function locale($locale)
    {
        $locale = in_array($locale, ['tm']) ? $locale : 'en';
        session()->put('locale', $locale);

        return redirect()->back();
    }
}
