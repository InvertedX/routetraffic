<?php
/**
 * Created by PhpStorm.
 * User: Sarath Kumar
 * Date: 12/4/2016
 * Time: 1:03 AM
 */


Route::get('traffic', function(){
    $routes = Route::getRoutes();
    return view('traffic::main',compact('routes'));
});
