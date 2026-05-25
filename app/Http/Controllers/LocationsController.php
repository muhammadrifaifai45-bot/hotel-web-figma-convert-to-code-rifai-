<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationsController extends Controller
{
    public function index(Request $request)
    {
        $lokasi_hotel = collect([
            [
            'kota'=>'tebet, jakarta selatan',
            'title'=>'HOME SUITES HOTEL MAMAT HOUSE',
            'description'=>'luxury, elegant and economical hotel in the strategic city center',
            'image'=> 'images/hotel_tebet.jpg'
            ],

            [
            'kota'=>'Braga, Bandung',
            'title'=>'HOME SUITES HOTEL BRAGA BANDUNG',
            'description'=>'luxury, elegant and beautiful vibes in braga bandung west java',
            'image'=> 'images/hotel_braga.jpg'
            ],

            [
                'kota'=>'Senayan, Jakarta',
                'title'=>'HOME SUITES HOTEL SENAYAN JAKARTA',
                'description'=>'luxury, elegant and Luxury vibes in Senayan Central busines of jakarta',
                'image'=> 'images/hotel_senayan.jpg'
            ],

            [
                'kota'=>'Kintamani, Bali',
                'title'=>'HOME SUITES HOTEL KINTAMANI BALI',
                'description'=>'luxury, elegant and Luxury vibes in Pandawa Islands',
                'image'=> 'images/kintamani.jpg'
            ]

            
          ]);

          $pencarian = $request->pencarian;

          if($pencarian){
             $lokasi_hotel = $lokasi_hotel->filter(function ($item) use ($pencarian){
                return str_contains(
                    strtolower($item['kota']),
                    strtolower($pencarian)
                );

             });
          }
            return view('home', compact('lokasi_hotel'));
    }
}
