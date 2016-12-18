<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'
 */
Route::get('/', 'FrontendController@index')->name('index');
Route::get('macros', 'FrontendController@macros')->name('macros');
Route::get('conciencia-social', 'FrontendController@concienciaSocial')->name('conciencia-social');
Route::get('eventos', 'FrontendController@eventos')->name('eventos');
Route::get('legislacion', 'FrontendController@legislacion')->name('legislacion');

/**
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 */
Route::group(['middleware' => 'auth'], function () {
	Route::group(['namespace' => 'User', 'as' => 'user.'], function() {
		Route::get('nuevo-evento', 'FrontendController@nuevoEvento')->name('nuevo-evento');
		Route::get('nuevo-media', 'FrontendController@nuevoMedia')->name('nuevo-media');

		/**
		 * User Dashboard Specific
		 */
		Route::get('dashboard', 'DashboardController@index')->name('dashboard');

		/**
		 * User Account Specific
		 */
		Route::get('account', 'AccountController@index')->name('account');

		/**
		 * User Profile Specific
		 */
		Route::patch('profile/update', 'ProfileController@update')->name('profile.update');
	});
});