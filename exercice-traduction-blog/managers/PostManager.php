<?php

class PostManager extends AbstractManager {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function findAll() : array {
        $query = $this->db->prepare("SELECT * FROM posts");
        
        $query->execute();
        
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $posts = [];
        
        foreach($result as $item) {
            $post = new Post(
                $item["title"], 
                $item["excerpt"], 
                $item["content"],
                $item["title_fr"], 
                $item["excerpt_fr"], 
                $item["content_fr"], 
                $item["author"], 
                DateTime::createFromFormat('Y-m-d H:i:s', $item["created_at"]));
            $posts[] = $post;
                
        }
    return $posts;
    }
}