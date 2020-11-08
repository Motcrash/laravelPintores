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