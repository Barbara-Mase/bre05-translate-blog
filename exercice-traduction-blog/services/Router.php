<?php

class Router {
    
    public function handleRequest(array $get) : void {
        if(isset($_GET["route"])) {
            if($_GET["route"] === "posts") {
                $ctrl = new PostController();
                $ctrl->show();
            } else if($_GET["route"] === "categories"){
                $ctrl = new CategoryController();
                $ctrl->show();
            } else {
                $ctrl = new CategoryController();
                $ctrl->show();
        }
        
        }
    }
}