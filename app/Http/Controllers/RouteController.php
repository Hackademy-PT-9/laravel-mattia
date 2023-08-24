<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    protected static $services = ['Siti', 'eCommerce', 'Gestionali', 'Marketing'];
    public function homepage()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function service()
    {
        return view('service', ['services' => self::$services]); //passo i dati statici
    }

    public function detail($string)
    {
        foreach (self::$services as $service) {
            if ($service == $string) {
                return view('detail', ['detail' => $service]);
            }
        }
        abort(404);
    }
}