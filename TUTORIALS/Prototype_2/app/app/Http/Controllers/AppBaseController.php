<?php

namespace App\Http\Controllers;

class AppBaseController extends Controller
{
    public function callAction($method, $parameters)
    {
        // $user = auth()->user();

        // $controller = class_basename(get_class($this));
        // $action = $method;
        // if ($controller === 'GestionControllersController') {
        //     $changeName = preg_replace('/Controller$/', '', $controller);
        // } else {
        //     $changeName = str_replace(['Controller', '@'], ['', '-'], $controller);
        // }
        // $permissions = $action . '-' . $changeName . 'Controller';
        // $this->authorize($permissions);
        return parent::callAction($method, $parameters);
    }
}
