<?php


Route::group(['middleware' => ['auth']],function(){
    Route::get('/',[
        'uses' => 'DashboardController@dashboard',
        'as' => 'dashboard',
    ]);

    Route::group(['namespace' => 'Settings','prefix' => 'settings'],function (){

        Route::get('/',[
            'uses' => 'SettingsController@index',
            'as' => 'settings.index',
        ]);

        Route::get('changepassword',[
            'uses' => 'PasswordController@form',
            'as' => 'settings.changepassword',
        ]);

        Route::post('changepassword',[
            'uses' => 'PasswordController@post',
            'as' => 'settings.changepassword.post',
        ]);
    });







});

Route::group(['namespace' => 'Auth'],function (){
    Route::get('logout',[
        'uses' => 'AuthController@logout',
        'as'    => 'auth.logout',
    ]);

    Route::get('login',[
        'uses' => 'AuthController@showLoginForm',
        'as'    => 'auth.login',
    ]);

    Route::post('login',[
        'uses' => 'AuthController@login',
        'as'    => 'auth.loginPost',
    ]);
});


// Registration Routes...
//$this->get('register', 'Auth\AuthController@showRegistrationForm');
//$this->post('register', 'Auth\AuthController@register');

// Password Reset Routes...
//$this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
//$this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
//$this->post('password/reset', 'Auth\PasswordController@reset');
