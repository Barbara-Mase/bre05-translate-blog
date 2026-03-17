<?php

class CategoryManager extends AbstractManager {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function findAll() : array {
        $query = $this->db->prepare("SELECT * FROM categories");
        
        $query->execute();
        
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $categories = [];
        
        foreach($result as $item) {
            $category = new Category(
                $item["title"],
                $item["description"], 
                $item["title_fr"], 
                $item["description_fr"]);
            $categories[] = $category;
        }
        return $categories;
        
    }
}