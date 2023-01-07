<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Larablog!';
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }
    public function service(){
        $data = array(
            'title' => 'Our Service',
            'services' => [
                'AI recruitment/evaluation platform for software developers.',
                'Outsourcing for web & mobile app.',
                'Technical training for web, mobile app & data science.']
        );
        return view('pages.service')->with($data);
    }
}