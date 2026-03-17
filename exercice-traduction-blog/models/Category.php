<?php

class Category {
    
    private ?int $id;
    
    public function __construct(private string $title, 
                                private string $description, 
                                private string $title_fr, 
                                private string $description_fr) {
        
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
    
    public function getDescription() : string {
        return $this -> description;
    }
    
    public function setDescription(string $description) : void {
        $this->description = $description;
    }
    
    public function getTitleFr() : string {
        return $this -> title_fr;
    }
    
    public function setTitleFr(string $title_fr) : void {
        $this->title_fr = $title_fr;
    }
    
    public function getDescriptionFr() : string {
        return $this -> description_fr;
    }
    
    public function setDescriptionFR(string $description_fr) : void {
        $this->description_fr = $description_fr;
    }
}