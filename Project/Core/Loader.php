<?php

class Loader {
    

    function __construct() {
        
    }
    public function Views($ViewName, $data) {
        include_once  "Views/" . $ViewName . ".php";
    }

    public function Model($ModelName) {
        include_once  "Models/" . $ModelName . ".php";
        return new $ModelName();
    }

}
