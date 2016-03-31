<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class MainController extends Controller {

//return mainpage
    public function getmain() {
        return view('main');
    }
}
