<?php

class IController {
   
    protected $loader = array();
    
            function __construct() {
                $this->loader=new Loader();
   }
}
