<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(){
        return '<a href="https://erha.co.id/contact">Contact Us</a>';
    }
}
