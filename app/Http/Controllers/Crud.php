<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Crud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poet = DB::table('poet')
            ->orderBy('poet_code')
            ->get();

        return view('Crud.showPoetas', array(
            'title' => 'Mostrar los Poetas',
            'poetas' => $poet
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Crud.altaPoeta', array(
            
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $poet = DB::table('poet')
            ->insert([
                'firs_name' => $request->input('first_name'),
                'surname' => $request->input('surname'),
                'address' => $request->input('address'),
                'post_code' => $request->input('post_code'),
                'telephone_number' => $request->input('telephone_number'),
            ]);

        return redirect()->action('Crud@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $poet = DB::table('poet')
            ->where('poet_code','=', $id)
            ->first();
        return view('Crud.altaPoeta', ['poet' => $poet]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $poet = DB::table('poet')
            ->where('poet_code', '=',  $request -> input('id'))
            ->update([
                'firs_name' => $request->input('first_name'),
                'surname' => $request->input('surname'),
                'address' => $request->input('address'),
                'post_code' => $request->input('post_code'),
                'telephone_number' => $request->input('telephone_number'),
            ]);
        return redirect()->action('Crud@index')
            ->with('status', 'Poeta Modificado Exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $poet = DB::table('poet')
            ->where('poet_code', '=',  $id)
            ->delete();

        return redirect()->action('Crud@index')
            ->with('status', 'Poeta Eliminado Exitosamente');
    }
}