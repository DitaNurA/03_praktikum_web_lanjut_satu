<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function AntiAging(){
        return view ('product')
            ->with ('page', 'ERHA Anti Aging')
            ->with ('url', 'https://erha.co.id/services/erha-age-corrector-anti-aging-program');
    }

    public function Brightening(){
        return view ('product')
            ->with ('page', 'ERHA Brightening')
            ->with ('url', 'https://erha.co.id/services/erha-truwhite-brightening-program');
    }

    public function AcneCure(){
        return view ('product')
            ->with ('page', 'ERHA Acne Cure')
            ->with ('url', 'https://erha.co.id/services/erha-acneact-acne-cure-program');
    }

    public function GrowthScalp(){
        return view ('product')
            ->with ('page', 'ERHA Growth and Scalp')
            ->with ('url', 'https://erha.co.id/services/erhair-hair-growth-and-scalp-program');
    }

    public function AllDerma(){
        return view ('product')
            ->with ('page', 'ERHA All Derma')
            ->with ('url', 'https://erha.co.id/services/erha-allderma-general-dermatology');
    }
}