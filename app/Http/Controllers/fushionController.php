<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fushionController extends Controller
{
    
        // Page d'accueil
        public function home()
        {
            return view('home');
        }
    
        // À propos de nous
        public function aboutUs()
        {
            return view('about');
        }
    
        // Actualités
        public function news()
        {
            $posts = Post::with('category')->latest()->get();
            return view('news', compact('posts'));
        }
    
        // Contactez-nous
        public function contactUs()
        {
            return view('contact');
        }
    
        // Méthodes administratives
        public function login()
        {
            return view('auth.login');
        }
    
        public function register()
        {
            return view('auth.register');
        }
    }

