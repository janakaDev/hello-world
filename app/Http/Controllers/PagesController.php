<?php

namespace App\Http\Controllers;

class PagesController extends Controller{
    
    public function getIndex(){
        
        return view('welcome');
    }
    
    public function getAbout(){
        $first = "janaka";
        $last = "sampath";
        
        $full=$first . " " . $last;
        $email="jsbnilantha@live.com"; 
        return view('about')-> withFullname($full)-> withEmail($email);
    }
    
    public function getContact(){
        
        return view('contact');
    }
   
}
