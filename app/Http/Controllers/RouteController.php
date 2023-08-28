<?php

namespace App\Http\Controllers;

use App\Mail\InfoMail;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class RouteController extends Controller
{

    protected static $services = [
        [
            'uri' => 'gestionali',
            'name' => 'Sistema Gestionali',
            'costo' => 1500,
            'tempo_di_realizzazione' => '2 settimane'
        ],
        [
            'uri' => 'ecommerce',
            'name' => 'Piattaforma eCommerce',
            'costo' => 2500,
            'tempo_di_realizzazione' => '3 settimane'
        ],
        [
            'uri' => 'siti-web',
            'name' => 'Siti Web',
            'costo' => 1000,
            'tempo_di_realizzazione' => '1 settimana'
        ],
        [
            'uri' => 'marketing-digitale',
            'name' => 'Marketing Digitale',
            'costo' => 1800,
            'tempo_di_realizzazione' => '2 settimane'
        ],
        [
            'uri' => 'app-mobile',
            'name' => 'Applicazione Mobile',
            'costo' => 3000,
            'tempo_di_realizzazione' => '4 settimane'
        ],
        [
            'uri' => 'seo',
            'name' => 'Servizi SEO',
            'costo' => 1200,
            'tempo_di_realizzazione' => '2 settimane'
        ],
        [
            'uri' => 'social-media',
            'name' => 'Gestione Social Media',
            'costo' => 800,
            'tempo_di_realizzazione' => '1 settimana'
        ],
        [
            'uri' => 'analisi-dati',
            'name' => 'Analisi Dati',
            'costo' => 2200,
            'tempo_di_realizzazione' => '3 settimane'
        ],
        [
            'uri' => 'design-grafico',
            'name' => 'Design Grafico',
            'costo' => 900,
            'tempo_di_realizzazione' => '1 settimana'
        ],
        [
            'uri' => 'formazione',
            'name' => 'Formazione Online',
            'costo' => 500,
            'tempo_di_realizzazione' => '2 settimane'
        ],
    ];
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
            if ($service['uri'] == $string) {
                return view('detail', ['detail' => $service]);
            }
        }
        abort(404);
    }
    public function send(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'number' => 'nullable',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ]);

        $data = [
            'name' => $request->input('name'),
            'number' => $request->input('number'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        // @dd($data);

        Mail::to($request->input('email'))->send(new InfoMail($data));
    }
}