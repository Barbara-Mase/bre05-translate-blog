<?php 

class PostController {
    
    public function __construct() {
        
    }
    
    public function show() : void {
        $route = "posts";

        
        $pm = new PostManager(); 
        $posts = $pm->findAll();
        var_dump($posts);
        
       require "./templates/posts.phtml";
    }
}