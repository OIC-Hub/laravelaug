<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
   
        // DB::insert("INSERT INTO users(name, email, password) values(?,?,?)", ['Apostle Ajala', 'dmiajala@yahoo.com', 'dami']);
    //    $users= DB::select('SELECT * FROM users');
        //  DB::update("update users set email='sos@dami.com', name='Agbaralowo Dami' WHERE id=?", [1]);
        // //  return $users;
        //  foreach($users as $user){
        //     echo $user->email. "\n";
        //  }
        // DB::delete('DELETE from users WHERE id=?', [2]);
        // DB::unprepared('DELETE FROM users WHERE id=1');
        // return view('pages.about', compact(['users']));

        
    }

    function contact(){
        //
    }
}
