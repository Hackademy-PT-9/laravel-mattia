<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    //definisco l'array
    protected static $services = ['Siti', 'eCommerce', 'Gestionali', 'Marketing'];
    //definisco i metodi
    public function homepage()
    {
        return view('homepage');
    }
    public function about()
    {
        return view('about');
    }
    public function services()
    {
        return view('services', ['services' => self::$services]);
    }
    public function detail($string)
    {
        foreach (self::$services as $service) {
            if ($string == $service) {
                return view('detail', ['detail' => $string]);
            }
        }
        abort(404);
    }
    public function contact()
    {
        return view('contact');
    }
}