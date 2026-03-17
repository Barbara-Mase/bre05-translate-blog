<?php

class CategoryController extends AbstractController {
    
    public function __construct() {
        
    }
    
    public function show() : void {
        //le template est appelé deux fois (voir le require plus bas) 
        //mais la première fois qu'il est appelé il n'a pas accès à $categories
        $cm = new CategoryManager();
        $categories = $cm->findAll();
        
        $this->render("categories", [
            "categories" => $categories
        ]);
        
        //$route = "categories";
        
        require "./templates/categories.phtml";

    }
}