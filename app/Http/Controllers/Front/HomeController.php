<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index()
    {
        $Title = '張成崗個人網站';
        $MessageShown = ('歡迎來到' . $Title);
        return TextResponse($MessageShown);

        // return view('front.home.index', compact(
        //     'Title'
        // ));
    }
}
