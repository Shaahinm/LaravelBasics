<?php
namespace App\Routing;
/**
 * Created by PhpStorm.
 * User: f-project
 * Date: 10/15/2017
 * Time: 8:33 AM
 */
class RouteDefinition
{
    public static function register($route){
        /*$route::get('tasks', 'TasksController@index');*/
        $route::get('tasks/{task}', 'TasksController@show');
        $route::post('tasks', 'TasksController@store');
        $route::put('tasks/{task}', 'TasksController@update');
        $route::delete('tasks/{task}', 'TasksController@delete');
    }

    public static function authentication($route) {
        $route::prefix('authentication')->group(function($r) use (&$route) {

            $route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
            $route::post('login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
            $route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);


            $route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
            $route::post('register', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);


            $route::get('password/reset', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
            $route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
            $route::get('password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
            $route::post('password/reset', ['as' => 'password.reset.post', 'uses' => 'Auth\ResetPasswordController@reset']);

        });
    }
}