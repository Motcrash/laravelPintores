<?php


use Illuminate\Support\Facades\Route;
use NunoMaduro\Collision\Adapters\Phpunit\Style;

Route::get('/jose', [
    'uses' => 'PagPaula@jose',
        'as' => 'jose'
        ]);

Route::get('/index', function () {
    return view('index');
});

Route::get('/david', [
    'uses' => 'PagPaula@david',
        'as' => 'david'
        ]);

        Route::get('/maria', [
            'uses' => 'PagPaula@maria',
                'as' => 'maria'
                ]);

                Route::get('/leonora', [
                    'uses' => 'PagPaula@leonora',
                        'as' => 'leonora'
                        ]);

                        Route::get('/rufino', [
                            'uses' => 'PagPaula@rufino',
                                'as' => 'rufino'
                                ]);


                                Route::get('/', 'PagPaula@login');  
                                Route::post('/validar', 'PagPaula@validarlogin');
                                    
                                
                                                              
                                Route::get('/', [
                                    'uses' => 'Crud@index',
                                    'as' => 'show'
                                ]);
                                
                                Route::get('/insert', [
                                    'uses' => 'Crud@create',
                                    'as' => 'insert'
                                ]);
                                
                                Route::get('/detail/{id}', [
                                    'uses' => 'Crud@show',
                                    'as' => 'detail'
                                ]);
                                
                                Route::get('/delete/{id}', [
                                    'uses' => 'Crud@destroy',
                                    'as' => 'delete'
                                ]);
                                
                                Route::post('/save', [
                                    'uses' => 'Crud@store',
                                    'as' => 'save'
                                ]);
                                
                                Route::post('/update', [
                                    'uses' => 'Crud@update',
                                    'as' => 'update'
                                ]);
