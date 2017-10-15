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
        $route::get('tasks', 'TasksController@index');
        $route::get('tasks/{task}', 'TasksController@show');
        $route::post('tasks', 'TasksController@store');
        $route::put('tasks/{task}', 'TasksController@update');
        $route::delete('tasks/{task}', 'TasksController@delete');
    }
}