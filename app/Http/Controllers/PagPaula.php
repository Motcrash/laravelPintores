<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagPaula extends Controller
{
    //
    public function jose(){
        return view('jose',[
            'title'=> 'José Clemente Orozco',
            'titulo'=> 'José Clemente Orozco',
            ]);
}
public function david(){
    return view('david',[
        'title'=> 'David Alfaro Siqueiros',
        'titulo'=> 'David Alfaro Siqueiros',
        ]);
}
public function leonora(){
    return view('leonora',[
        'title'=> 'Leonora Carrington',
        'titulo'=> 'Leonora Carrington',
        ]);
}
public function maria(){
    return view('maria',[
        'title'=> 'María Izquierdoo',
        'titulo'=> 'María Izquierdo',
        ]);
}
public function rufino(){
    return view('rufino',[
        'title'=> 'Rufino Tamayo',
        'titulo'=> 'Rufino Tamayo',
        ]);
}

}
