<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $age = 67;
        $name="<p>Aderibigbe <h1> Apostle <br> Damilola";
        // ['name'=>' <p>Aderibigbe <h1> Apostle <br> Damilola']
        // compact(['name', 'age']
        return view('welcome')
        ->with('name', $name)
        ->with('age', 786677);
    }
    function about(){
        //
    }

    function contact(){
        //
    }
}
