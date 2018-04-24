<?php

    namespace App\Controllers;

    Class PagesController
    
    {

        public function home() 
        
        {

            return view('index');
 
        }  
        
        public function about() 
        
        {

            $about = 'About Us';

            return view('about', ['about' => $about]);
 
        }     
        
        
        public function aboutculture() 
        
        {

            return view('about-culture');
 
        }  

        public function contact() 
        
        {

            return view('contact');
        }    

    }

?>