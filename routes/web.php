<?php
Route::get('/', function () { 
    return view('index');
});
Route::get('/order', 'OrdersController@create');
Route::post('/', 'OrdersController@store');
// Route::get('/', function () { return redirect('/admin/home'); });

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('/calendar', 'Admin\SystemCalendarController@index'); 
  
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('projects', 'Admin\ProjectsController');
    Route::post('projects_mass_destroy', ['uses' => 'Admin\ProjectsController@massDestroy', 'as' => 'projects.mass_destroy']);
    Route::post('projects_restore/{id}', ['uses' => 'Admin\ProjectsController@restore', 'as' => 'projects.restore']);
    Route::delete('projects_perma_del/{id}', ['uses' => 'Admin\ProjectsController@perma_del', 'as' => 'projects.perma_del']);
    Route::resource('orders', 'Admin\OrdersController');
    Route::post('orders_mass_destroy', ['uses' => 'Admin\OrdersController@massDestroy', 'as' => 'orders.mass_destroy']);
    Route::post('orders_restore/{id}', ['uses' => 'Admin\OrdersController@restore', 'as' => 'orders.restore']);
    Route::delete('orders_perma_del/{id}', ['uses' => 'Admin\OrdersController@perma_del', 'as' => 'orders.perma_del']);



 
});