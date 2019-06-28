<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
     public function index() {
         return view('pages.home');
     }
     public function news() {
         return view('pages.news');
     }
     public function login(){
         return view('pages.login');
     }
     public function aboutus() {
         return view('pages.aboutus');
     }
}
