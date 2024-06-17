<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        $ourName = 'Robert';
        return view('home', ['title'=>'Home', 'name'=>$ourName]); # this is the name of the BLADE file under resources/views
    }
    public function about() {
        return view('about', ['title'=>'About Us']);
    }
    public function contact() {
        return view('contact', ['title'=>'Contact Us']);
    }
    public function framing() {
        return view('framing', ['title'=>'Framing']); # this is the name of the BLADE file under resources/views
    }
    public function artscrafts() {
        return view('arts-crafts', ['title'=>'Arts & Crafts']);
    }
    public function stationery() {
        return view('stationery', ['title'=>'Stationery']);
    }
    public function laser() {
        return view('laser', ['title'=>'Laser Cutting']);
    }
    public function design() {
        return view('design', ['title'=>'Graphic design']);
    }
}
