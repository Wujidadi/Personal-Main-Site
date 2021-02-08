<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index()
    {
        $MessageShown = 'Welcome to Wujidadi\'s main site';
        return TextResponse($MessageShown);

        // return view('front.home.index', compact(
        //     'Title'
        // ));
    }
}
