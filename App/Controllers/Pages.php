<?php

class Pages extends Controller{
    
    public function __construct(){
        
    
        
    }
    
    public function index(){
        
        if(isLoggedIn){
            redirect('Posts');
        }
        
        $data = [
            'title' => 'ArtiBook',
            'description' => 'A small FaceBook clone named after my dog, Arti'
        ];
        
        
        $this->view('Pages/index', $data);
        
    }
    
    public function about(){
        
        $data = [
            'title' => 'About ArtiBook',
            'description' => 'A small FaceBook clone named after my dog, Arti'
        ];
        
        $this->view('Pages/about', $data);
    }
}