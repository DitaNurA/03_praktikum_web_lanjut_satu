<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function dailySkin(){
        return view('program')
            ->with ('page','Dalily Skin')
            ->with ('url','https://erha.co.id/services/daily-skin-program');
    }

    public function skinHealth(){
        return view('program')
            ->with ('page','Skin Health')
            ->with ('url','https://erha.co.id/services/skin-health-program');
    }
}
