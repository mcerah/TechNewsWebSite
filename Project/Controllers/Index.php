<?php

class IndexController extends IController{
    
       function __construct() {
       parent::__construct();
     
   }


   public function Index(){ 
        $this->getStreamNews();
   }
   
   public function getStreamNews(){
       
   $IndexModel=$this->loader->model("Index");
   $data=$IndexModel->ListNews();
   
   $this->loader->Views("HomePage",$data);
   }
   
    public function getNewsByID($NewsID){
  
    $IndexModel=$this->loader->model("GetNewsByIDModel");
    $IndexModel->GetNewsByID($NewsID);
      
   }
  public function addComment($NewsID,$Name,$Comment){ 
    $IndexModel=$this->loader->model("CommentsModel");
    $IndexModel->AddComment($NewsID,$Name,$Comment);
      
   }
     public function upComment($CommentID){ 
    $IndexModel=$this->loader->model("CommentsModel");
    $IndexModel->UpComment($CommentID);
      
   }
     public function downComment($CommentID){ 
    $IndexModel=$this->loader->model("CommentsModel");
    $IndexModel->DownComment($CommentID);
      
   }
 
}

?>