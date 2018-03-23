<?php 
/*
BASE CONTROLLER
LOADS THE MODELS AND VIEWS
*/

class Controller {

    // Load Model   
    public function model ($model){
        // REQUIRE MODEL FILE
        require_once '../app/models/' . $model . '.php';

        // INSTANTIATE MODEL
        return new $model();
    }

    // Load view 
    public function view($view, $data = []){
        // Check for the view file
        if(file_exists('../app/views/' . $view . '.php')){
        require_once '../app/views/' . $view . '.php';
        } else {
            // View does not exist
            die('View does not exist');
        }
    }
}