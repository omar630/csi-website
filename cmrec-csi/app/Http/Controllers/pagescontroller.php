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
     public function exclusive() {
         return view('pages.exclusive');
     }
     public function contact()  {
         return view('pages.contact');
     }
     public function logged() {
         return view('pages.logged');
     }
     public function loggednews() {
         return view('pages.loggednews');
     }
     public function loggedevents() {
         return view('Pages.loggedevents');
     }
}
