<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WelcomeController extends Controller
{
    public function index()
    {
        $title = 'Accueil';
        $menu = [
            [
                'url' => '/',
                'nom' => 'Accueil'
            ],
            [
                'url' => '/about',
                'nom' => 'A propos'
            ],
            [
                'nom' => 'Contact',
                'url' => '/contact'
            ]
        ];
        return view('welcome',[
            'title' => $title,
            'menu' => $menu
        ]);
    }
    public function about()
    {
        $title = 'A propos';
        $menu = [
            [
                'url' => '/',
                'nom' => 'Accueil'
            ],
            [
                'url' => '/about',
                'nom' => 'A propos'
            ],
            [
                'nom' => 'Contact',
                'url' => '/contact'
            ]
        ];
        return view('about',[
            'title' => $title,
            'menu' => $menu
        ]);
    }
    public function contact()
    {
        $title = 'Contact';
        $menu = [
            [
                'url' => '/',
                'nom' => 'Accueil'
            ],
            [
                'url' => '/about',
                'nom' => 'A propos'
            ],
            [
                'nom' => 'Contact',
                'url' => '/contact'
            ]
        ];
        return view('contact',[
            'title' => $title,
            'menu' => $menu
        ]);
    }
}
