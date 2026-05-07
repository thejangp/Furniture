<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }

    public function products()
    {
        return view('pages/products');
    }

    public function gallery()
    {
        return view('pages/gallery');
    }

    public function about()
    {
        return view('pages/about');
    }

    public function contact()
    {
        return view('pages/contact');
    }

    public function kitchenCabinets()
    {
        $jsonPath = FCPATH . 'data/products.json';
        $data = [];
        if (file_exists($jsonPath)) {
            $data = json_decode(file_get_contents($jsonPath), true);
        }
        
        return view('pages/kitchen_cabinets', ['productsData' => $data]);
    }

    public function comingSoon()
    {
        return view('pages/coming_soon');
    }
}
