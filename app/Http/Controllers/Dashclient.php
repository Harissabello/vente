<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashclient extends Controller{

    public function dashbord(){
        return view('dashbordClient');
    }
}


?>