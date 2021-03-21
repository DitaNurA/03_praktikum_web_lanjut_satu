<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function article($id){
        echo "Halaman Artikel dengan ID $id";
    }

    public function news(){
        return view('article')
            ->with ('url','https://erha.co.id/news');
    }

    public function newsString($string){
        return view ('article')
            ->with ('url','https://erha.co.id/news' . $string);
    }
}
