<?php

namespace App\Http\Controllers\Developing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function Main()
    {
        return TextResponse('測試，測試，請勿胡搞瞎搞！');
    }
}
