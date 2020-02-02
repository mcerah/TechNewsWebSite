<?php

class CommentsModel extends IModel{
      function __construct() {

        parent::__construct();
    }

        public function AddComment($NewsID,$Name,$Comment) {

       $this->ExecuteQuery("INSERT INTO tblcomments ( NewsID, CommentAuthor, CommentDate, CommentContent) VALUES (". $NewsID .", '".$Name."', CURRENT_TIMESTAMP, '".$Comment."')");
    }
    
     public function UpComment($CommentID) {

       $this->ExecuteQuery("UPDATE tblcomments SET CommentUp =CommentUp+1 WHERE tblcomments.CommentID = ".$CommentID);
    }
    
     public function DownComment($CommentID) {

       $this->ExecuteQuery("UPDATE tblcomments SET CommentDown =CommentDown+1 WHERE tblcomments.CommentID = ".$CommentID);
       
    }

}
