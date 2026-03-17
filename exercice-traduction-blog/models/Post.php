<?php

class Post {
    
    private ?int $id;
    private array $categories = [];
    
    
    public function __construct(private string $title, 
                                private string $excerpt,
                                private string $content,
                                private string $title_fr, 
                                private string $excerpt_fr,
                                private string $content_fr,
                                private int $author, 
                                private DateTime $created_at) {
        
    }
    
    public function getId() : ?int {
        return $this->id;
    }
    
    public function setId(?int $id) : void {
        $this->id = $id;
    }
    
    public function getTitle() : string {
        return $this -> title;
    }
    
    public function setTitle(string $title) : void {
        $this->title = $title;
    }
    
    public function getExcerpt() : string {
        return $this -> excerpt;
    }
    
    public function setExcerpt(string $excerpt) : void {
        $this->excerpt = $excerpt;
    }
    
    public function getContent() : string {
        return $this -> content;
    }
    
    public function setContent(string $content) : void {
        $this->content = $content;
    }
    
    
    public function getTitleFr() : string {
        return $this -> title_fr;
    }
    
    public function setTitleFr(string $title_fr) : void {
        $this->title_fr = $title_fr;
    }
    
    public function getExcerptFr() : string {
        return $this -> excerpt_fr;
    }
    
    public function setExcerptFr(string $excerpt) : void {
        $this->excerpt_fr = $excerpt_fr;
    }
    
    public function getContentFr() : string {
        return $this -> content_fr;
    }
    
    public function setContentFr(string $content_fr) : void {
        $this->content_fr = $content_fr;
    }
    
    public function getAuthor() : int {
        return $this->author;
    }
    
    public function setAuthor(int $author) : void {
        $this -> author = $author;
    }
    
    public function getCreatedAt() : DateTime {
        return $this->created_at;
    }
    
    public function setCreatedAt(DateTime $created_at) : void {
        $this -> created_at = $created_at;
    }
    
    public function getCategories() : array {
        return $this->categories;
    }
    
    public function setCategories(array $categories) : void {
        $this->categories = $categories;
    }
    
    
}