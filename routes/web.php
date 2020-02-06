<?php

Route::get('/', 'FullCalendarController@index')->name('index');

Route::get('/load-events', 'EventController@loadEvents')->name('routeLoadEvents');

Route::put('/event-update', 'EventController@update')->name('routeEventUpdate');

Route::post('/event-store', 'EventController@store')->name('routeEventStore');

Route::delete('/event-destroy', 'EventController@destroy')->name('routeEventDelete');

Route::delete('/fast-event-destroy', 'FastEventController@destroy')->name('routeFastEventDelete');

/*
 *
 *  Rotas para eventos rápidos
 */
Route::delete('/fast-event-destroy', 'FastEventController@destroy')->name('routeFastEventDelete');
Route::put('/fast-event-update', 'FastEventController@update')->name('routeFastEventUpdate');
Route::post('/fast-event-store', 'FastEventController@store')->name('routeFastEventStore');
